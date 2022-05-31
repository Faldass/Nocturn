<?php
    include('models/UserClass.php');
    class UserController{
        private $userManager;
        
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
                    echo json_encode($msg["connect"]); 
                }else{
                    echo json_encode($msg["errPsswd"]);
                }
            }else{
                echo json_encode($msg["errUser"]);
            }
        }
        public function register(){
            $msg=[
                "empty"=>"Renseigner Tous les champs",
                "register"=>"Vous êtes inscrit",
                "errUser"=>"Utilisateur déjà existant",
            ];
             
            $this->userManager = new User();

            if(empty($_POST["mail"]) || empty($_POST["psswd"]) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['age']) || empty($_POST['phone'])){
                echo json_encode($msg["empty"]);
            }else if (!empty($this->userManager->getOneUser($_POST["mail"]))){
                echo json_encode($msg["errUser"]);
            }else{
                $this->userManager->setName_user(htmlspecialchars(strip_tags($_POST["nom"])));
                $this->userManager->setSurname_user(htmlspecialchars(strip_tags($_POST["prenom"])));
                $this->userManager->setAge_user(htmlspecialchars(strip_tags($_POST["age"])));
                $this->userManager->setPhone_user(htmlspecialchars(strip_tags($_POST["phone"])));
                $this->userManager->setMail_user(htmlspecialchars(strip_tags($_POST["mail"])));
                $this->userManager->setPsswd_user(password_hash($_POST["psswd"], PASSWORD_DEFAULT));
                
                $this->userManager->createUser();

                echo json_encode($msg["register"]); 
            }
        }
    }