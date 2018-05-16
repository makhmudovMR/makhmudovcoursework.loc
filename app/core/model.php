<?php

include_once ROOT."/app/lib/database.php";

class Model
{

    public $db;

    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function getData()
	{}
}