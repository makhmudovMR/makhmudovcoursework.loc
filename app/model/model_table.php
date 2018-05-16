<?php

include_once ROOT."/app/core/model.php";
include_once ROOT."/app/lib/database.php";

class Model_Table extends Model
{
    public function get_data()
    {
        $db = new DataBase();
        $data = $db->get('t_people');

        return [
            'table' => $data
        ];
//        return [
//
//            'table'=>[
//                ['name' => 'magomed', 'age' => '', 'job_title'=>'job_title', 'location'=>'location'],
//                ['name' => 'magomed', 'age' => '', 'job_title'=>'job_title', 'location'=>'location'],
//                ['name' => 'jon', 'age' => '24', 'job_title'=>'worker', 'location'=>'Moscow']
//            ]
//
//        ];
    }
}
