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
    }