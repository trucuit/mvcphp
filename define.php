<?php 

//GAN DUONG DAN 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(__FILE__));
define('APPLICATION_PATH', ROOT_PATH . DS . 'application');
define('LIBRARY_PATH', ROOT_PATH . DS . 'libs');
define('PUBLIC_PATH', ROOT_PATH . DS . 'public');
define('TEMPLATE_PATH', PUBLIC_PATH . DS . 'template');

//GAN DUONG DAN MAC DINH
define('MODUDE_DEFAULT', 'default');
define('CONTROLLER_DEFAULT', 'index');
define('ACTION_DEFAULT', 'index');

//CAU HINH DATABASE
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','test');
define('DB_TABLE','group');

?>