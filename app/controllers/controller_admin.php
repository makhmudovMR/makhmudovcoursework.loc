<?php

include_once ROOT."/app/model/model_admin.php";
include_once ROOT."/app/core/controller.php";
include_once ROOT."/app/core/view.php";

class Controller_Admin extends Controller
{
    function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();
    }


    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->page_generate('admin_view.php', $data, true);
    }
}