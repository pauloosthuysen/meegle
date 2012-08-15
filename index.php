<?php
define('JEXEC', 1);

$action = $_GET['action'];
$secret = $_GET['secret'];
$type = $_GET['type'];

require_once('conf.php');

if($secret == $secret && $action){
	if($action != ''){
		switch($type){
			case 'json':
				header('Content-Type: application/json');
		                header('charset: UTF-8');
				break;
			case 'xml':
				header('Content-Type: text/xml');
		                header('charset: UTF-8');
                		echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
				break;
			case 'html':
			default:
				header('Content-Type: text/html');
		                header('charset: UTF-8');
				break;
		}
		include("actions/{$action}.php");
	}
}else{
	header('Location: http://www.google.com');
}
