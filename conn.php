<?php
	//For get any error if have..
	// ini_set('display_errors','On');
	// error_reporting(E_ALL);

	// $mysqli = new mysqli('localhost', 'root', 'root', 'web_service');
	mysql_connect('localhost', 'root', 'root');
	mysql_select_db('web_service');
	
	require 'functions.php';
 ?>