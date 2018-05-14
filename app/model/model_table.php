<?php

include_once ROOT."/app/core/model.php";

class Model_Table extends Model
{
    public function get_data()
    {
        return ['table'=>[
                ['name' => 'magomed', 'age' => '', 'job_title'=>'job_title', 'location'=>'location'],
                ['name' => 'magomed', 'age' => '', 'job_title'=>'job_title', 'location'=>'location']
            ]

        ];
    }
}
