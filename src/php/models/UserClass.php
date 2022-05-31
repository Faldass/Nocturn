<?php
require_once('config.php');
class User extends Database{
    private $id_user;
    private $name_user;
    private $surname_user;
    private $mail_user;
    private $psswd_user;
    private $age_user;
    private $phone_user;
    private $register_user;
    private $id_role;

    // public function __construct($mail_user,$psswd_user,$name_user,$surname_user,$phone_user,$age_user,$register_user){
    //     $this->name_user = $name_user;
    //     $this->surname_user = $surname_user;
    //     $this->age_user = $age_user;
    //     $this->phone_user = $phone_user;
    //     $this->mail_user = $mail_user;
    //     $this->psswd_user = $psswd_user;
    //     $this->register_user = $register_user;
    // }

    public function getId_user()
    {
        return $this->id_user;
    }
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
    }

    public function getName_user()
    {
        return $this->name_user;
    }
    public function setName_user($name_user)
    {
        $this->name_user = $name_user;
    }

    public function getSurname_user()
    {
        return $this->surname_user;
    }
    public function setSurname_user($surname_user)
    {
        $this->surname_user = $surname_user;
    }

    public function getAge_user()
    {
        return $this->age_user;
    }
    public function setAge_user($age_user)
    {
        $this->age_user = $age_user;
    }

    public function getPhone_user()
    {
        return $this->phone_user;
    }
    public function setPhone_user($phone_user)
    {
        $this->phone_user = $phone_user;
    }

    public function getMail_user()
    {
        return $this->mail_user;
    }
    public function setMail_user($mail_user)
    {
        $this->mail_user = $mail_user;
    }

    public function getPsswd_user()
    {
        return $this->psswd_user;
    }
    public function setPsswd_user($psswd_user)
    {
        $this->psswd_user = $psswd_user;
    }

    public function getRegister_user()
    {
        return $this->register_user;
    }
    public function setRegister_user($register_user)
    {
        $this->register_user = $register_user;
    }

    public function geId_role()
    {
        return $this->id_role;
    }
    public function setId_role($id_role)
    {
        $this->id_role = $id_role;
    }

    public function getOneUser($mail_user){
        $query = 'SELECT
                    *
                FROM
                    users
                WHERE
                    mail_user = "'.$mail_user.'"';
        $req = $this->getDB()->prepare($query);
        $req-> execute();
        $data = $req->fetch();
        if(!empty($data)){
            return $data;
        }else{
            return null;
        }
    }
    public function createUser(){
        $req = $this->getDB()->prepare('INSERT INTO users (name_user, mail_user, psswd_user, surname_user, age_user, phone_user, register_user) VALUES (:name_user, :mail_user, :psswd_user, :surname_user, :age_user, :phone_user, :register_user)');
        $req->execute(array(':name_user'=>$this->name_user,
                            ':mail_user'=>$this->mail_user,
                            ':psswd_user'=>$this->psswd_user,
                            ':surname_user'=>$this->surname_user,
                            ':age_user'=>$this->age_user,
                            ':phone_user'=>$this->phone_user,
                            ':register_user'=>$this->register_user));
    }
    public function modifyUser($mail_user,$psswd_user,$name_user, $surname_user, $age_user, $phone_user){

    }
    public function deleteUser($id_user, $mail_user, $psswd_user){
        
    }
}