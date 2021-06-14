<?php
require_once('libs/Db.php');

class User extends Db
{
    private $table_name = "user";
    protected $email;
    protected $password;
    protected $id_user;


    public function populate(Array $log){
        $this->email = $log['email'];
        $this->password = $log['password'];
    }
    public function create()
    {
        $req = $this->db->prepare("INSERT INTO $this->table_name (email,mot_de_passe) VALUES (?,?)");
        $req->bindvalue(1,$this->email);
        $req->bindvalue(2,$this->password);
        $req->execute();
        $req = $this->db->prepare("SELECT LAST_INSERT_ID() as 'id';");
        $req->execute();
        return $req->fetch(PDO::FETCH_OBJ)->id;
    }
}
