<?php
include_once 'app/lib/database.php';
include_once "app/core/model.php";
include_once "app/model/model_admin.php";

if ($_POST['add_data_in_table_people'] == 1){
    $data = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'job_title' => $_POST['job'],
        'location' => $_POST['location']
    ];
    $model = new Model_Admin();
    $model->addData($data);
    $_SESSION['add_data'] = 1;

    header("Location: http://makhmudovcoursework.loc/table");
    exit();
}