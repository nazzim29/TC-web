<?php
require_once('\libs/Db.php')
class Achat extends Db
{
    private $table_name = "achat"
    private $date_achat;
    private $id_user;
    private $id_achat;


    public function populate(Array $var)
    {
        $this->date_achat = $var['date_achat'];
        $this->id_user = $var['id_user'];
        $this->id_achat = $var['id_achat'];
    }
    public function create()
    {
        $req = $this->db->prepare("");
        $req->bindvalue(1,$this->id_user);
        $req->bindvalue(2,$this->nom);
        $req->bindvalue(3,$this->prenom);
        $req->bindvalue(4,$this->adresse);
        $req->bindvalue(5,$this->numero_cb);
        $req->bindvalue(6,$this->client);
        $req->bindvalue(7,$this->email);
        $req->bindvalue(8,$this->password);
        $req->execute();
    }
    public function update()
    {
    }
    public function read()
    {

    }
    public function delete()
    {
        
    }
}
