<?php 
class GroupController extends Controller
{
	public function __construct($params)
	{
		parent::__construct($params);
		$this->_templateObject->setConfig('template.ini');
		$this->_templateObject->setTemplate('index.php');
		$this->_templateObject->setFolderTemplate('admin/main');
		$this->_templateObject->load();
	}

	public function indexAction()
	{
		$this->_view->_title = 'User Manager: User Groups';
		// $this->_view->setTitle('Group');
		$this->_view->render('group/index',true);
	}

	public function addAction()
	{
		$this->_view->_title = 'ADD';
		$this->_view->render('group/add',true);
	}
}
?>