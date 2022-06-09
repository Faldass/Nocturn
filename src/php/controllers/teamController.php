<?php
    include('models/TeamClass.php');
    class TeamController{
        private $teamManager;

        public function __construct(){
            $this->teamManager = new Team();
        }
        
        public function loadTeam(){
            $team = $this->teamManager->getFullTeam();
            echo json_encode($team);
        }
        public function addMembre(){
            $_POST = json_decode(file_get_contents("php://input"),true);
            $this->teamManager->setName_team(htmlspecialchars(strip_tags($_POST["name"])));
            $this->teamManager->setMission_team(htmlspecialchars(strip_tags($_POST["role"])));
            // $this->teamManager->setPhoto_team(htmlspecialchars(strip_tags($_POST["photo"])));
            $this->teamManager->setFb_team(htmlspecialchars(strip_tags($_POST["fb"])));
            $this->teamManager->setInsta_team(htmlspecialchars(strip_tags($_POST["ig"])));
            $this->teamManager->setSc_team(htmlspecialchars(strip_tags($_POST["sc"])));
            
            if(!empty($_POST)){
                $this->teamManager->addTeam();
            }
        }
        public function delMembre(){
            $_POST = json_decode(file_get_contents("php://input"),true);
            $this->teamManager->setId_team(htmlspecialchars(strip_tags($_POST["id"])));

            $this->teamManager->delTeam();
        }
        public function modifMembre(){
            $_POST = json_decode(file_get_contents("php://input"),true);
            $this->teamManager->setId_team(htmlspecialchars(strip_tags($_POST["id"])));
            $this->teamManager->setName_team(htmlspecialchars(strip_tags($_POST["name"])));
            $this->teamManager->setMission_team(htmlspecialchars(strip_tags($_POST["role"])));
            // $this->teamManager->setPhoto_team(htmlspecialchars(strip_tags($_POST["photo"])));
            $this->teamManager->setFb_team(htmlspecialchars(strip_tags($_POST["fb"])));
            $this->teamManager->setInsta_team(htmlspecialchars(strip_tags($_POST["ig"])));
            $this->teamManager->setSc_team(htmlspecialchars(strip_tags($_POST["sc"])));

            if(!empty($_POST)){
                $this->teamManager->modifTeam();
            }
        }
    }