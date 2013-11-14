<?php


class Model_Login_LoginMysql extends Abstract_Mysql
{
	public function selectAll($config)
	{
		
		$sql="SELECT * FROM comments";
		
		$result=mysqli_query($this->linkread,$sql);
		
		if ($result)
		while($row=mysqli_fetch_assoc($result))
		{
			$comments[]=$row;
		}
		return $comments;
	}
	
	
	public function select($id,$config)
	{
		$linkRead=getLinkRead($config);
	
		// Prepare
		$sql="SELECT * FROM comments WHERE id_comment=".$id;
	
		$result=mysqli_query($linkRead,$sql);
		$row=mysqli_fetch_array($result);
		
	
		return $row;
	}
	
	
	
	public function update($id, $comment, $config)
	{
		$linkWrite=getLinkWrite($config);
		
		$sql = "UPDATE comments SET			
		comment ='".$comment['comment']."',
		valoration =".$comment['valoration']."			
		WHERE id_comment=".$id;
		
		
		echo $sql;
		
		echo "<pre>";
		print_r($comment);
		echo "</pre>";
		die;
		mysqli_query($linkWrite, $sql);
			
	}
	
	public function insert($comment, $config)
	{
		$linkWrite=getLinkWrite($config);
	
		$sql = "INSERT comments (date, comment, valoration, users_id_user, spaces_id_espace) VALUES (
		'". $comment['date']. "',"
		.$comment['comment']."',"
		.$comment['valoration'].","
		.$comment['users_id_user'].","
		.$comment['spaces_id_espace'].")";
		
		echo $sql;
	
		echo "<pre>";
		print_r($comment);
		echo "</pre>";
		die;
		mysqli_query($linkWrite, $sql);
	
	}
	
	
	public function delete($id, $config)
	{
		$linkWrite=getLinkWrite($config);
	
		$sql = "DELETE comments WHERE id_comment=".$id;
	
		echo $sql;
	
		die;
		mysqli_query($linkWrite, $sql);
	
	}

}