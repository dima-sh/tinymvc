<?php

class MainController extends Controller
{

	function index()
	{	
		$this->view->generate('main.phtml', 'template.phtml');
	}
}