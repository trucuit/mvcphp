<?php 
class Controller
{

	//View Object
	protected $_view;

	//View Model
	protected $_model;

	//PARAM (GET - POST)
	protected $_param;

	//TEMPLATE OBJECT
	protected $_templateObject;

	public function __construct($arrParam)
	{
		$this->setModel($arrParam['module'], $arrParam['controller']);
		$this->setTemplate($this);
		$this->setView($arrParam['module']);
		$this->setParam($arrParam);
		$this->_view->arrParam = $this->_param;
	}

	//SET VIEW 
	public function setView($moduleName)
	{
		$this->_view = new View($moduleName);
	}

	//GET VIEW 
	public function getView()
	{
		return $this->_view;
	}

	//SET MDOEL
	public function setModel($moduleName, $modelName)
	{
		$modelName = ucfirst($modelName) . 'Model';
		$pathFile  = APPLICATION_PATH . DS . $moduleName . DS . 'models' . DS . $modelName . '.php';
		if(file_exists($pathFile)){
			include_once $pathFile;
			$this->_model = new $modelName();
		}
	}

	//SET PARAM
	public function setParam($params)
	{
		$this->_param = $params;
		;
	}
	
	//SET Template
	public function setTemplate()
	{
		$this->_templateObject = new Template($this);
	}

}
?>