<?php

class DataBase
{

    public $mysqli = null;

    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '', 'makhmudovcoursework');
    }

    public function add($talbe_name, $data)
    {
        return $this->mysqli->query("INSERT INTO `{$talbe_name}` (`name`, `age`, `job_title`, `location`) VALUES ('{$data['name']}', '{$data["age"]}', '{$data['job_title']}', '{$data['location']}')");
    }

    public function get($table_name)
    {
        $data = [];
        $result = $this->mysqli->query("SELECT * FROM {$table_name}");
        while($row = $result->fetch_array()){
            $data[] = $row;
        }
        return $data;
    }

}