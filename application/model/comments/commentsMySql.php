<?php


/**
 * Read users from file
 * @return array users
 */



function getLinkRead($config)
{
	$linkRead=mysqli_connect($config['database.server'],
			$config['database.username'],
			$config['database.password']
	);
	
	mysqli_select_db($linkRead,$config['database.db'] );
	
	return $linkRead;
}

function getLinkWrite($config)
{
	$linkRead=mysqli_connect($config['database.server'],
			$config['database.username'],
			$config['database.password']
	);

	mysqli_select_db($linkRead,$config['database.db'] );

	return $linkRead;
}

function selectAll($config)
{
	
	$linkRead=getLinkRead($config);
	$a=1;
	// Prepare
	$sql="SELECT * FROM comments";
	echo $sql;
	$result=mysqli_query($linkRead,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		$comments[]=$row;
	}
	
	return $comments;
}


function select($id,$config)
{
	$linkRead=getLinkRead($config);

	// Prepare
	$sql="SELECT * FROM comments WHERE id_comment=".$id;

	$result=mysqli_query($linkRead,$sql);
	$row=mysqli_fetch_array($result);
	

	return $row;
}



function updateComment($id, $comment, $config)
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

function insertComment($comment, $config)
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


function deleteComment($id, $config)
{
	$linkWrite=getLinkWrite($config);

	$sql = "DELETE comments WHERE id_comment=".$id;

	echo $sql;

	die;
	mysqli_query($linkWrite, $sql);

}








