<?php

include_once ROOT."/app/model/model_table.php";
include_once ROOT."/app/core/controller.php";
include_once ROOT."/app/core/view.php";

class Controller_Table extends Controller
{
    function __construct()
    {
        $this->model = new Model_Table();
        $this->view = new View();
    }


    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->page_generate('table_view.php', $data, true);
    }
}