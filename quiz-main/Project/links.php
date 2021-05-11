<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?> <!-- Ensures user is logged in -->

<!DOCTYPE html>

<title>Links</title>

<head>
<link rel="stylesheet" href="./style.css">
</head>

<div class='ripple-background'>
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

<p style="margin-left: auto; margin-right: auto; width: 30em; font-size: 23px;"> If you have not yet achieved 10/10 in the
	Icon quiz, which can be found <a href="./quiz.php" style="text-decoration: underline; color: #0B73D4;">here</a>, check out the links listed below to enhance your knowledge.
	Don't forget to take the quiz again and check your record after getting familiar with the icons. Your records can be found by clicking <a href="./history.php" style="text-decoration: underline; color: #0B73D4;">here</a>.</p>

<h2><a class="effect-5" href="https://venngage.com/blog/symbols-and-meanings/#2"><span>Revision link 1</span></a></h2>
<h2><a class="effect-5" href="https://smallbusiness.com/tech/what-mobile-icons-mean/"><span>Revision link 2</span></a></h2>
<h2><a class="effect-5" href="https://www.combin.com/guide/application-icons-and-their-meanings/"><span>Revision link 3</span></a></h2>
<h2><a class="effect-5" href="https://www.computerhope.com/issues/ch001801.htm"><span>Revision link 4</span></a></h2>
<h2><a class="effect-5" href="https://www.samsung.com/za/support/mobile-devices/what-do-the-different-indicator-icons-mean-on-my-samsung-galaxy-alpha/"><span>Additional reading for android users</span></a></h2>
<h2><a class="effect-5" href="https://support.apple.com/en-us/HT207354"><span>Additional reading for iPhone users</span></a></h2>
<!-- create links to the external websites -->
</html>
