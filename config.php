<?php
require 'enviroment.php';

global $config;
$config = [];
if(ENVIROMENT == 'development'):
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '123456';
else:
	$config['dbname'] = '';
	$config['host'] = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
endif;