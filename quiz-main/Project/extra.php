<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

    $res = $_GET['result'];
    
    Add_Score($con, $res);

?> 

<script>
  setTimeout(window.close(), 200);
</script>