<?php

class PortfolioController extends Controller
{

	function __construct()
	{
		$this->model = new Portfolio();
		$this->view = new View();
	}
	
	function index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('portfolio.phtml', 'template.phtml', $data);
	}
}
