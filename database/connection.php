<?php
$server = "localhost";
$userDB = "root";
$passwordDB = "123456";
$db = "myphoto";

//connect to mysql
mysql_connect($server, $userDB, $passwordDB) or die("Sorry, can't connect to the mysql");

//select the db
mysql_select_db($db) or die("Sorry, can't select the database");

?>