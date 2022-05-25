<?php
header('Access-Control-Allow-Origin:*');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding");
header("Content-type:application/json");

include("controllers/userController.php");

$userController = new UserController;
$url = "";



$data="";
if(isset($_POST["data"])){
  $data=$_POST["data"];
  $userController->register($data);

}


if (isset($_GET['url'])) {
  $url = $_GET['url'];
  
}

switch ($url) {
    case 'inscription':
        $userController->register();
        break;
    case 'connexion':
        $userController->login();
        break;
}