<?php 
class UserController extends Controller
{
	public function __construct($params)
	{
		parent::__construct($params);
		$this->_templateObject->setConfig('template.ini');
		$this->_templateObject->setTemplate('index.php');
		$this->_templateObject->setFolderTemplate('admin/main');
		$this->_templateObject->load();
	}

	public function loginAction()
	{
		$this->_view->setTitle('Login');
		$this->_view->render('user/login',true);
	}

	public function logoutAction()
	{
		$this->_view->setTitle('Logout');
		$this->_view->render('user/logout',true);
	}
}
?>