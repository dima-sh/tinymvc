<?php

class ServicesController extends Controller
{

	function index()
	{
		$this->view->generate('services.phtml', 'template.phtml');
	}
}
