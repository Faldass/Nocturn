<?php
header('Access-Control-Allow-Origin:*');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding");
header("Content-type:application/json");

include("controllers/userController.php");
include("controllers/teamController.php");

$userController = new UserController;
$teamController = new TeamController;
$url = "";

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
    case 'loadTeam':
        $teamController->loadTeam();
        break;
    case 'addMembre' :
        $teamController->addMembre();
        break;
    case 'delMembre' :
        $teamController->delMembre();
        break;
    case 'modifMembre' :
        $teamController->modifMembre();
        break;
    default;
}