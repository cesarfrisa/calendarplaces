<?php


abstract class Abstract_Controller
{
	protected $layout = 'frontend';
	protected $request;
	protected $config;
	
	abstract function indexAction(); //todos controles les obligo a implemtentar indexAction
	
	//el resto se uitlizara el de esta clase, peo los podemos implementar
	
	
	public function __construct($request, $config)
	{
		$this->request = $request;
		$this->config = $config;
		$this->setLayout($this->layout);
	}
	
	
	/**
	 * @return the $layout
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * @param string $layout
	 */
	public function setLayout($layout) {
		$this->layout = $layout;
	}
	
	
	public function __destruct()
	{
		$content=getView($this->request['action'],
				$this->request['controller'],
				$this->viewParams,
				$this->config);
		
		$this->layoutparams=array('content'=>$content);
		//lo que haciamos en el buffer lo del ob_star......
		echo renderLayout($this->getLayout(),
				$this->request['controller'],
				$this->layoutparams);
	}

	
	
}