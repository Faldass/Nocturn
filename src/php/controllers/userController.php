<?php
    include('models/UserClass.php');
    class UserController{
        private $userManager;

        public function __construct(){
            // $this->userManager = new UserClass();
        }
        
        public function login(){
            $msg=[
                    "empty"=>"Renseigner Tous les champs",
                    "connect"=>"Vous êtes connecté",
                    "errPsswd"=>"Mot de passe incorrect",
                    "errUser"=>"Utilisateur inexistant",
            ];
            if(empty($_POST["mail_user"]) || empty($_POST["psswd_user"])){
                return msg["empty"];
            }
            $user = $this->userManager->getOneUser($_POST["mail_user"]);
            if(!empty($user)){
                if($_POST["psswd_user"] == $user->getPsswd_user()){
                    return msg["connect"]; 
                }else{
                    return msg["errPsswd"];
                }
            }else{
                return msg["errUser"];
            }
        }
        public function register($data){
           var_dump($data);
            echo json_encode($data);
            $msg=[
                "empty"=>"Renseigner Tous les champs",
                "register"=>"Vous êtes inscrit",
                "errUser"=>"Utilisateur déjà existant",
            ];
             
             
            if(empty($_POST["mail_user"]) || empty($_POST["psswd_user"]) || empty($_POST['name_user']) || empty($_POST['id_user'])){
                 return $msg["empty"];
                
               
            }
            if (isset($_POST["nom"])) {
                var_dump($_POST["nom"]);
                
            }
            echo json_encode($_POST["nom"]);
            
            
            $user = $this->userManager->getOneUser($_POST["mail_user"]);
            if(!empty($user)){
                return msg["errUser"];
            }else{
                $this->userManager->createUser($_POST["mail_user"], $_POST["psswd_user"], $_POST['name_user'], $_POST['id_user']);
                return msg["register"]; 
            }
        }
    }