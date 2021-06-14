<?php
require_once('\libs/Db');
class Publication extends Db
{
    private $table_name = "publication"
    private $id_publication;
    private $titre;
    private $description;
    private $date_creation;
    private $date_modification;
    private $valide;
    private $id_user;
    private $id_evenement;
}
