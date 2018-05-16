<?php
include_once ROOT."/app/model/model_admin.php";
include_once ROOT."/app/model/model_login.php";
include_once ROOT."/app/core/controller.php";
include_once ROOT."/app/core/view.php";

class Controller_Admin extends Controller
{
    public $model_login;

    function __construct()
    {
        $this->model = new Model_Admin();
        $this->model_login = new Model_Login();
        $this->view = new View();
    }


    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->page_generate('admin_view.php', $data, true);
    }

    function action_add_in_table(){
//        print_r($_POST);
        $data = [
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'job_title' => $_POST['job'],
            'location' => $_POST['location']
        ];

        $this->model->addData($data);

        $code = "<p>Данные были успешно добавлены!!!</p>"
        ."<p><a href='/admin'><< Админ панель</a> </p>";

        $this->view->generate('success_view.php', 'template_view.php');

    }
}