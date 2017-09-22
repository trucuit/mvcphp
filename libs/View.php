<?php
class View
{
	public $_moduleName;
	public $_title;
	public $_metaHTTP;
	public $_metaName;
	public $_fileCss;
	public $_fileJs;
	public $_templatePath;
	public $_dirImg;
	public $_fileView;

	public function __construct($module)
	{
		$this->_moduleName = $module;
	}
	public function render($fileInclude, $full = true)
	{
		$filePath = APPLICATION_PATH . DS . $this->_moduleName . DS . 'views' . DS . $fileInclude . '.php';
		if(file_exists($filePath)){
			if($full){
				$this->_fileView = $fileInclude;
				include_once $this->_templatePath;
			}else{
				include_once $filePath;
			}
		}
	}
	//CREATE TITLE
	public function createTitle($title)
	{
		return "<title>" . $title . "</title>";
	}

	//SETTILE
	public function setTitle($title)
	{
		$this->_title = "<title>" . $title . "</title>";	
	}

	//CREATE META
	public function createMeta($files,  $type = 'name')
	{
		$xhtml = '';
		if(!empty($files)){
			foreach ($files as $file) {
				$value = explode('|', $file);
				if($type == 'name'){
					$xhtml .= "<meta name='" . $value[0] . "' content='". $value[1] ."' />";
				}else{
					$xhtml .= "<meta http-equiv='" . $value[0] . "' content='". $value[1] ."' />";
				}
			}
		}
		return $xhtml;
	}

	public function createLink($path, $files, $type)
	{
		$xhtml = '';
		if(!empty($files)){
			foreach ($files as $value) {
				if($type == 'css'){
					$xhtml .= '<link rel="stylesheet" type="text/css" href="' . $path . DS . $value .'"/>';
				}elseif($type == 'js'){
					$xhtml .= '<script type="text/javascript" src="' . $path . DS . $value .'"></script>';
				}
			}
		}
		return $xhtml;
	}


	//SET TEMPLATE
	public function setTemplate($path)
	{
		$this->_templatePath = $path;
	}
}
?>