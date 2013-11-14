<?php

class Controllers_Comments extends Abstract_Controller
{

	Protected $viewParams = array();
	Protected $layout = 'login';
	
	
	public function indexAction() //lo obliga el abstract de 
	{
		
	}
	
	
	public function commentsCreate()
	{
		
	}
	
	public function commentsRead()
	{
		if($_POST)
		{
			if (isset($_POST['signup']))
			{
				header('Location: /login/signup');
				exit;
			}
				
			$commr = new Model_Comments();
			if ($user->singin($_POST['email'], $_POST['password']))
			{
				header('Location: /backend');
				exit;
			}
			else
			{
				header('Location: /login/login');
				exit;
			}
				
		}	
	}
	
	public function commentsUpdate()
	{
	
	}
	
	public function commentsDelete()
	{
	
	}
	
}
