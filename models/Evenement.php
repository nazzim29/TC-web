<?php
require_once('\libs/Db.php')
class Evenement extends Db
{
    private $table_name = "evenement";
    private $id_evenement;
    private $debut;
    private $fin;
    private $nom_evenement;
    private $endroit;
}
