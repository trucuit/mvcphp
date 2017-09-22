<?php 
include_once 'define.php';

function __autoload($value)
{
	include_once LIBRARY_PATH . DS . "{$value}.php";
}

$bootstrap = new Bootstrap();
$bootstrap->init();
?>