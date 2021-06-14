<?php
require_once('\libs/Db.php')
class Produit extends Db
{
    private $table_name = "produit";
    private $id_produit;
    private $nom_produit;
    private $categorie;
    private $prix;
    private $remise;
}
