<?php


class Model_Comments
{
	protected $model = 'Comments';
	protected $adapter;

	public function __construct()
	{
		$adaptername = __CLASS__."_".$this->model.$_SESSION['register']['adapter'];
		$this->adapter = new $adaptername();	
	}
	
//ejemplo de Model_login
// 	public function singin($identity, $credentials)
// 	{
// 		return $this->adapter->getCredentials($identity, $credentials);
// 	}

	public function selectOne()
	{
		include_once('comments.php');
		$comments = select($id,$config);
		return $comments;		
	}

	public function selectAll($config)
	{
		include_once('comments.php');
		$comments = selectAll($config);
		return $comments;
	}	

	public function update($comment, $id, $config)
	{
		include_once('comments.php');
		$comments = updateComment($id, $comment, $config);
		return $comments;
	}
	
	// public function insert($id, $config)
	// public function delete($id, $config)
	
	

	
	
	
	
}