<?php
require_once('\libs/Db.php')
class Contient extends Db
{
    private $table_name = "contient"
    private $id_achat;
    private $id_produit;
    private $quantite;
}
