<?php 

use libs\DB;
abstract class Mod{
    public $db;
    public $errors = [];
    public function __construct() {
        $this->db = new DB();
        echo '123';
    }


    public function pure($str, $flags)
    {
        return trim(htmlentities(strip_tags($str), $flags, "UTF-8"));
    }



	public static function encryptPassword($password)
	{
		return hash('sha256', $password);
	}

    public function message($object, $status, $message)
	{
		exit(json_encode(['object'=>$object, 'status' => $status, 'message'=> $message]));
    }
}

?>