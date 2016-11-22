<?php

class ContactsController extends Controller
{
	
	function index()
	{
		$this->view->generate('contacts.phtml', 'template.phtml');
	}
}
