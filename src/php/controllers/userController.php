<?php
    include('models/UserClass.php');
    class UserController{
        private $userManager;

        public function __construct(){
            $this->userManager = new User();
        }
        
        public function login(){
            $msg=[
                    "empty"=>"Renseigner Tous les champs",
                    "connect"=>"Vous êtes connecté",
                    "errPsswd"=>"Mot de passe incorrect",
                    "errUser"=>"Utilisateur inexistant",
            ];
            if(empty($_POST["mail"]) || empty($_POST["psswd"])){
                echo json_encode($msg["empty"]);
            }
            $user = $this->userManager->getOneUser($_POST["mail"]);
            if(!empty($user)){
                if($_POST["psswd"] == $user->getPsswd_user()){
                    return msg["connect"]; 
                }else{
                    return msg["errPsswd"];
                }
            }else{
                return msg["errUser"];
            }
        }
        public function register(){
            $msg=[
                "empty"=>"Renseigner Tous les champs",
                "register"=>"Vous êtes inscrit",
                "errUser"=>"Utilisateur déjà existant",
            ];
             
             
            if(empty($_POST["mail"]) || empty($_POST["psswd"]) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['age']) || empty($_POST['phone'])){
                echo json_encode($msg["empty"]);
            }else if (!empty($this->userManager->getOneUser($_POST["mail"]))){
                echo json_encode($msg["errUser"]);
            }else{
                $this->userManager->createUser($_POST["mail"], $_POST["psswd"], $_POST['nom'], $_POST['prenom'],$_POST['age'],$_POST['phone'],"11/12/2022");
                echo json_encode($msg["register"]); 
            }
        }
    }