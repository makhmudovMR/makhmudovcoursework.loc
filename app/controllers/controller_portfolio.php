<?php

include_once ROOT."/app/model/model_portfolio.php";
include_once ROOT."/app/core/controller.php";
include_once ROOT."/app/core/view.php";

class Controller_Portfolio extends Controller
{

	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();

		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}
}