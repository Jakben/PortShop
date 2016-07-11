<?php
// this may not be required if you use php autoload function
require_once("models/category.php"); // Models in here. Models are like classes
include_once("PDO_config.php");
$servername = "db629114270.db.1and1.com";
$username = "dbo629114270";
$password = ";Narly93";
$dbname = "dbo629114270";
// Create connection
$conn = new mysqli ( $servername, $username, $password, $dbname );
// Check connection



$_category=new Category();
$cats=$_category->list_count();

require_once("views/index.php");
?>