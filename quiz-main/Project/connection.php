<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die('<script type="text/javascript">alert("Failed to Connect!");location.replace("connection.php")</script>');
}
// connect to the database
