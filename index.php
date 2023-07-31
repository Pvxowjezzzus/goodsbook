<?php 
spl_autoload_register(function ($class){
    $baseDir = __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR;
    
        $file = $baseDir . str_replace('\\', DIRECTORY_SEPARATOR, rtrim($class, '\\')) . '.php';
    
    if (file_exists($file)) {
        require_once $file;
         var_dump($file);
    }
});

$mainURL = $_SERVER['REQUEST_URI'];
$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$url = explode('?', $url);
$url = explode('.php', $url[0]);
$url = $url[0];

$modelName = "models\\".ucfirst($url);

if($mainURL === "/") {
    require_once('./public_html/views/auth.php');
    $model = new models\Auth;
}
else {
   require_once('./public_html/views/'.$url.'.php'); 
   $model = new $modelName;
}


?>