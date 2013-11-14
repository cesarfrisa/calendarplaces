<?php


class Model_Comments
{
	protected $model = 'Login';
	protected $adapter;

	public function __construct()
	{
		$adaptername = __CLASS__."_".$this->model.$_SESSION['register']['adapter'];
		$this->adapter = new $adaptername();	
	}
	
// 	public function singin($identity, $credentials)
// 	{
// 		return $this->adapter->getCredentials($identity, $credentials);
// 	}
	
// 	public function singup()
// 	{
		
// 	}

	public function read()
	{
		include_once('comments.php');
		$comments = select($id,$config);
		return $comments;		
	}


	public function update($comment, $id, $config)
	{
		include_once('comments.php');
		$comments = updateComment($id, $comment, $config);
		return $comments;
	}

	// function select($id, $config)
	// function delete($id, $config)
	
	
	function readUsers($config)
	{	
		include_once('comments.php');
		$comments = selectAll($config);
		return $comments;
	}
}