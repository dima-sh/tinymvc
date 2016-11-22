<?php

class Error404Controller extends Controller
{
	
	function index()
	{
		$this->view->generate('404.phtml', 'template.phtml');
	}

}
