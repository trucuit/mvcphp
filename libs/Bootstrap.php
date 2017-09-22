<?php 
class Bootstrap
{
	private $_params;
	private $_controllerObject;

	//KHOI TAO
	public function init()
	{		
		$this->setParam();
		
		$controllerName     = ucfirst($this->_params['controller']) . 'Controller';
		$controllerPath = APPLICATION_PATH . DS . $this->_params['module'] . DS . 'controllers' . DS . $controllerName . '.php';
		if(file_exists($controllerPath)){
			$this->loadFileExistController($controllerPath, $controllerName);
			$this->callMethod();
		}else{
			$this->error();
		} 
	}

	//SET PARAM
	public function setParam()
	{
		$this->_params = array_merge($_GET, $_POST);
		$this->_params['module'] = isset($this->_params['module']) ? $this->_params['module'] : MODUDE_DEFAULT;
		$this->_params['controller'] = isset($this->_params['controller']) ? $this->_params['controller'] : CONTROLLER_DEFAULT;
		$this->_params['action'] = isset($this->_params['action']) ? $this->_params['action'] : ACTION_DEFAULT;
	}

	//LOAD FILE EXTST
	public function loadFileExistController($filePath, $controllerName)
	{
		include_once $filePath;
		$this->_controllerObject = new $controllerName($this->_params);
	}

	//CALL METHOD
	public function callMethod()
	{
		$actionName = $this->_params['action'] . 'Action';
		if(method_exists($this->_controllerObject, $actionName)){			
			$this->_controllerObject->$actionName ();
		}else{
			$this->error();
		}
	}

	//CALL CLASS ERROR
	public function error()
	{
		include_once APPLICATION_PATH . DS . MODUDE_DEFAULT . DS . 'controllers' . DS . 'ErrorController.php';
		$error  = new ErrorController();
	}
}

?>