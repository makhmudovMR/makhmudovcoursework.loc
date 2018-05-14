<?php

include_once ROOT."/app/model/model_login.php";
include_once ROOT."/app/core/controller.php";
include_once ROOT."/app/core/view.php";

class Controller_Login extends Controller
{
    function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }


    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->page_generate('login_view.php', $data, true);
    }
}