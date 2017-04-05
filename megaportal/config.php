<?php
require 'environment.php';


define("BASE_URL", "http://localhost/megaportal");

global $config;
$config = array();
if(ENVIRONMENT == "development") {
	$config['dbname'] = 'portal';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
	$config['dbname'] = 'galeria';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}