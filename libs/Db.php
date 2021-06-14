<?php
abstract class Db
{
    private $dbusername = "root";
    private $dbpwd = "";
    protected $db;
    public function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=tc_web", $this->dbusername, $this->dbpwd);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            throw new Exception($e, 0506);
        }
    }
    protected function getAll(){
        $req = $this->db->prepare("SELECT * FROM ".$this->table_name);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}