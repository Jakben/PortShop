<?php
	//set off all error for security purposes
error_reporting(0);

//There was a sizable error that caused me to lose a lot of work. So I trying to use pdo might be weird

//define some contstant
	define( "DB_DSN", "mysql:host=LOCATIONHERE" ); //this constant will be use as our connectionstring/dsn

	define( "DB_USERNAME", "USERNAMEHERE" ); //username of the database
	define( "DB_PASSWORD", "PASSWORDHERE" ); //password of the database
define( "CLS_PATH", "class" ); //the class path of our project
	 //include the models
	include_once( CLS_PATH . "/user.php" )
?>