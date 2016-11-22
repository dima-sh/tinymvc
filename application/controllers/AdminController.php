<?php

class AdminController extends Controller
{
	
	function index()
	{
		session_start();
		
		/*
		Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
		в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
		Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
		*/
		if ( $_SESSION['admin'] == "12345" )
		{
			$this->view->generate('admin.phtml', 'template.phtml');
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

	}
	
	// Действие для разлогинивания администратора
	function logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

}
