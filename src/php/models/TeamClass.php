<?php
require_once('config.php');
class Team extends Database{
    private $id_team;
    private $name_team;
    private $fb_team;
    private $insta_team;
    private $sc_team;
    private $photo_membre;
    private $id_mission;

    public function getId_team(){
		return $this->id_team;
	}
	public function setId_team($id_team){
		$this->id_team = $id_team;
	}

	public function getName_team(){
		return $this->name_team;
	}
	public function setName_team($name_team){
		$this->name_team = $name_team;
	}

	public function getFb_team(){
		return $this->fb_team;
	}
	public function setFb_team($fb_team){
		$this->fb_team = $fb_team;
	}

	public function getInsta_team(){
		return $this->insta_team;
	}
	public function setInsta_team($insta_team){
		$this->insta_team = $insta_team;
	}

	public function getSc_team(){
		return $this->sc_team;
	}
	public function setSc_team($sc_team){
		$this->sc_team = $sc_team;
	}

	public function getPhoto_membre(){
		return $this->photo_membre;
	}
	public function setPhoto_membre($photo_membre){
		$this->photo_membre = $photo_membre;
	}

	public function getId_mission(){
		return $this->id_mission;
	}
	public function setId_mission($id_mission){
		$this->id_mission = $id_mission;
	}

    public function getFullTeam(){
        $query = 'SELECT
                    *
                FROM
                    team';       
        $req = $this->getDB()->prepare($query);
        $req-> execute();
        $data = $req->fetch();
        if(!empty($data)){
            return $data;
        }else{
            return null;
        }
    }
}