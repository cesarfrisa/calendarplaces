<?php 

class Bootstrap
{
	protected $request;
	protected $layoutparams;
	protected $controller;
	protected $sessionId;
	protected $config;
	
	public function __construct($configFile)
	{
		require_once ("../application/model/generalModel.php");
		$this->config=readConfig($configFile, APPLICATION_ENV);
		$this->configApp();
	}
	
	public function configApp()
	{
		$this->_request();
		$this->_session();
		$this->_layoutparams();
		//$this->routes();
		//$this->db();	
	}
		
	protected function _layoutparams()
	{
		$this->layoutparams=array(
				"request"=>$this->request,
				"config"=>$this->config);
	}
	
	public function run()
	{		
		$this->dispatch();
	}
	
	protected function _request()
	{
		$this->request=getRequest();
	}
	
	protected function _session()
	{
		session_start();
		$this->sessionId=session_id();
		return $this->sessionId;	
	} 
	public function dispatch()
	{
		$controllerName = "Controllers_".ucfirst($this->request['controller']);
		$actionName = $this->request['action']."Action";
		
		$this->controller = new $controllerName($this->layoutparams['request'],
										  $this->layoutparams['config']);
		$content=$this->controller->$actionName();
		
	}
	
// 	public function __destruct()
// 	{
// 		echo $this->controller->getLayout();
// 		 renderLayout($this->controller->getLayout(), 
// 						  $this->request['controller'],
// 						  $this->layoutparams);
// 	}
}










