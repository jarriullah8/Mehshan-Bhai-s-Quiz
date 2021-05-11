<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?> <!-- Ensures user is logged in -->


<!DOCTYPE html>

<head>
<link rel="stylesheet" href="./style.css">
</head>

<div class='ripple-background'>
  <div class='circle xxlarge shade1'></div>
  <div class='circle xlarge shade2'></div>
  <div class='circle large shade3'></div>
  <div class='circle medium shade4'></div>
  <div class='circle small shade5'></div>
</div>


<div class="container">
  <div class="shadows" style="text-transform: none"><span>T</span><span>e</span><span>c</span><span>h</span><span> </span><span>T</span><span>e</span><span>s</span><span>t</span>
  </div>
</div>

<br>
<br>

<div class="container">
  <a class="button button-3" href="./quiz.php">Quiz</a>
  <a class="button button-3" href="./history.php">History</a>
  <a class="button button-3" href="./links.php">Links</a>
  <a class="button button-4" href="./logout.php">Logout</a>
</div>
<!-- basic houstyle formatting -->
</html>
