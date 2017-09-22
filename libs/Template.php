<?php
class Template
{
	//File Config
	private $_fileConfig;
	//File Template (admin/main/index.php)
	private $_fileTemplate;
	//Folder Template (admin/main)
	private $_folderTemplate;
	//Controller Object
	private $_controllerObj;
	public function __construct($controller)
	{
		$this->_controllerObj  = $controller;
	}
	public function load()
	{
		$fileConfig = $this->getConfig();
		$fileTemplate = $this->getTemplate();
		$folderTemplate = $this->getFolderTemplate();
		$pathFileConfig = TEMPLATE_PATH . DS . $folderTemplate . DS .$fileConfig;
		if(isset($pathFileConfig)){
			$arrConfig = parse_ini_file($pathFileConfig);
			$view = $this->_controllerObj->getView();
			$view->_title = $view->createTitle($arrConfig['title']);
			$view->_metaName = $view->createMeta($arrConfig['metaName'], 'name');
			$view->_metaHTTP = $view->createMeta($arrConfig['metaHTTP'], 'http');
			$view->_fileCss = $view->createLink('public/template' . DS . $this->_folderTemplate . DS . $arrConfig['dirCss'], $arrConfig['fileCss'], 'css');
			$view->_fileJs = $view->createLink('public/template' . DS . $this->_folderTemplate . DS . $arrConfig['dirJs'], $arrConfig['fileJs'], 'js');
			$view->_dirImg 		= $arrConfig['dirImg'];
			
			$view->setTemplate(TEMPLATE_PATH .DS . $folderTemplate . DS . $fileTemplate);
		}
	}
	//SET CONFIG
	public function setConfig($fileConfig = 'template.ini')
	{
		$this->_fileConfig = $fileConfig;
	}
	//GET CONFIG
	public function getConfig()
	{
		return $this->_fileConfig;
	}
	//SET TEMPLATE
	public function setTemplate($fileTemplate = 'index.php')
	{
		$this->_fileTemplate = $fileTemplate;
	}
	//GET TEMPLATE
	public function getTemplate()
	{
		return $this->_fileTemplate;
	}
	//SET FOLDER TEMPLATE
	public function setFolderTemplate($folderTemplate = 'admin/main')
	{
		$this->_folderTemplate = $folderTemplate;
	}
	//GET FOLDER TEMPLATE
	public function getFolderTemplate()
	{
		return $this->_folderTemplate;
	}
}
?>