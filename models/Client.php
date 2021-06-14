<?php
require_once('models/User.php');

class Client extends User
{
    private $table_name = "client";
    private $nom;
    private $prenom;
    private $adresse;
    private $numero_cb;
    private $client;


    public function populate(Array $client)
    {
        $this->nom = $client['nom'];
        $this->prenom = $client['prenom'];
        $this->adresse = $client['adresse'];
        $this->numero_cb = $client['numero_cb'];
        $this->client = $client['client'];
        $this->email = $client['email'];
        $this->password = $client['password'];
        $this->id_user = $client['id_user'];
    }
    public function create()
    {
        $req = $this->db->prepare("INSERT INTO $this->table_name (`Id_user`, `Nom`, `Prenom`, `adresse`, `numero_de_carte_bancaire`, `client`, `email`, `mot_de_passe`) VALUES (?,?,?,?,?,?,?,?)");
        $req->bindvalue(1,intval($this->id_user));
        $req->bindvalue(2,$this->nom);
        $req->bindvalue(3,$this->prenom);
        $req->bindvalue(4,$this->adresse);
        $req->bindvalue(5,$this->numero_cb);
        $req->bindvalue(6,$this->client);
        $req->bindvalue(7,$this->email);
        $req->bindvalue(8,$this->password);
        $req->execute();
    }
}
