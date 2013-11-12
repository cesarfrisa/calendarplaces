<?php 



// Define application environment
defined('APPLICATION_ENV') ||
	define('APPLICATION_ENV',
			(getenv('APPLICATION_ENV') ?
			 getenv('APPLICATION_ENV') : 'production'));

require_once ("../model/generalModel.php");
require_once ("../model/filesModel.php");
require_once ("../model/users/file/users.php");

$configFile="../configs/config.ini";
$config=readConfig($configFile, "production");


$request=getRequest();

$layoutparams=array(
		"request"=>$request,
		"config"=>$config);

switch ($request['controller'])
{
	case 'users':
		echo renderLayout('login', $request['controller'],$layoutparams);
	break;
	
	case 'index':
		echo renderLayout('frontend', $request['controller'],$layoutparams);				
	break;
	
	case 'backend':
		echo renderLayout('backend', $request['controller'],$layoutparams);
		break;
	default:
	break;
}








