<?php 
namespace models;
use Mod;

class Auth extends Mod{

    // function __construct()
    // {
    //     parent::__construct();
    // }
   
    public function checkData(){
        if(!empty($_POST)) {

            if(!preg_match('/([a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9])/',$_POST['email'])) {
                $this->errors[] = 'email';
            }
            if(strlen(trim($_POST['password'])) < 8 || strlen(trim($_POST['password'])) > 50){
                $this->errors[] = 'password';
            }
            if(!empty($this->errors)){
                http_response_code(400);
                return $this->message($this->errors, http_response_code(400), 'Some Errors');
            }
            else 
                $this->AuthUser($_POST);

        } 
    }
    
    public function AuthUser($post){
        $params = [
            'username' => $post['username'],
		    'password' => self::encryptPassword($post['password']),
        ];

        $query = $this->db->row('SELECT  email = :email AND  password = :password', $params);
        if(!$query){
            return $this->message($this->errors, http_response_code(400), 'Some Errors');
        }
    }

}

if(isset($_POST)){
    $fn = new Auth;
    $fn->checkData();
}
?>