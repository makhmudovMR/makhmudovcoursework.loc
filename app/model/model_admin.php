<?php
include_once ROOT."/app/core/model.php";

class Model_Admin extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        return [



        ];
    }

    public function addData($data)
    {
        return $this->db->add('t_people', $data);
    }
}
