<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);


?> <!-- Ensures user is logged in -->

<!DOCTYPE html>

<title>Quiz</title>

<head>
<link rel="stylesheet" href="./style.css">
</head>

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

<body>

<head>
	<title>Test</title>
</head>

<!-- Quiz code -->

<style>
body {
	text-transform: none;
}

#main {
width: 80%;
max-width: 950px;
border: 1px #0B94D4 solid;
margin: auto;
padding: 10px;
background-color: #0B94D4;
border-radius: 10px;
} /* this code displays the white box which contains the title*/

label {
display: block;
} /* shows radio buttons in a column format rather than line*/

input {
width: 30px;
margin-left: 20px;
} /* gives padding to the radio buttons*/


button {
width: 100px;
margin-top: 20px;
background-color: #0B94D4;
} /* submit button styling*/
</style>

<body>
<div id="main">
<div id="header">
<h1>Icon Quiz</h1>
</div>

<p>Your score is: <span id="grade">__</span></p>
</div>
</body>

<form id="form1">
<br>
<h3>What does the image below represent if found on an application?</h3> <img src="./images/gear_icon.png" width="75" height="75"/>
<label for="one_string"><input type="radio" name="one" value="0" id="one_string" />Text chat</label>
<label for="one_join"><input type="radio" name="one" value="0" id="one_join" />Refresh</label>
<label for="one_info"><input type="radio" name="one" value="1" id="one_info" />Settings menu</label>
<label for="one_condition"><input type="radio" name="one" value="0" id="one_condition"/>Search tool</label>
<br>
<h3>What does the image below represent if found on an application?</h3> <img src="./images/share_icon.png" width="75" height="75"/>
<label for="two_string"><input type="radio" name="two" value="1" id="two_string"/>Share</label>
<label for="two_join"><input type="radio" name="two" value="0" id="two_join"/>Directions</label>
<label for="two_info"><input type="radio" name="two" value="0" id="two_info" />Email</label>
<label for="two_condition"><input type="radio" name="two" value="0" id="two_condition" />Brightness</label>
<br>
<h3>Which icon below represents 'Search' feature?</h3>
<label for="three_string"><input type="radio" name="three" value="0" id="three_string" /></label> <img src="./images/forward_arrow.png" width="50" height="50"/>
<label for="three_join"><input type="radio" name="three" value="1" id="three_join" /></label> <img src="./images/search_icon.png" width="50" height="50"/>
<label for="three_info"><input type="radio" name="three" value="0" id="three_info" /></label> <img src="./images/refresh_icon.png" width="50" height="50"/>
<label for="three_condition"><input type="radio" name="three" value="0" id="three_condition" /></label> <img src="./images/edit_icon.png" width="50" height="50"/>
<br>
<h3>Which icon would you expect to see for 'Weather'?</h3>
<label for="four_string"><input type="radio" name="four" value="0" id="four_string" />Camera</label>
<label for="four_join"><input type="radio" name="four" value="0" id="four_join" />Flag</label>
<label for="four_info"><input type="radio" name="four" value="0" id="four_info" />Map</label>
<label for="four_condition"><input type="radio" name="four"  value="1" id="four_condition" />Cloud</label>
<br>
<h3>Which icon would you expect to show a return/back function?</h3>
<label for="five_string"><input type="radio" name="five" value="0" id="five_string" />Circular Arrow</label>
<label for="five_join"><input type="radio" name="five" value="0" id="five_join" />Arrow pointing right</label>
<label for="five_info"><input type="radio" name="five" value="1" id="five_info" />Arrow pointing left</label>
<label for="five_condition"><input type="radio" name="five"  value="0" id="five_condition" />Straight horizontal line</label>
<br>
<h3>What does the icon below show?</h3> <img src="./images/home_icon.png" width="75" height="75"/>
<label for="six_string"><input type="radio" name="six" value="1" id="six_string" />Home</label>
<label for="six_join"><input type="radio" name="six" value="0" id="six_join" />Save</label>
<label for="six_info"><input type="radio" name="six" value="0" id="six_info" />Submit</label>
<label for="six_condition"><input type="radio" name="six"  value="0" id="six_condition" />Delete</label>
<br>
<h3>Which icon would you associate an edit function with?</h3>
<label for="seven_string"><input type="radio" name="seven" value="0" id="seven_string" /></label> <img src="./images/double_arrow.png" width="50" height="50"/>
<label for="seven_join"><input type="radio" name="seven" value="1" id="seven_join" /></label> <img src="./images/edit_icon.png" width="50" height="50"/>
<label for="seven_info"><input type="radio" name="seven" value="0" id="seven_info" /></label> <img src="./images/lock_icon.png" width="50" height="50"/>
<label for="seven_condition"><input type="radio" name="seven"  value="0" id="seven_condition" /></label> <img src="./images/exclamation_icon.png" width="50" height="50"/>
<br>
<h3>Which icon would you expect to see for email?</h3>
<label for="eight_string"><input type="radio" name="eight" value="0" id="eight_string" />Wrench</label>
<label for="eight_join"><input type="radio" name="eight" value="1" id="eight_join" />Envelope</label>
<label for="eight_info"><input type="radio" name="eight" value="0" id="eight_info" />Lock sign</label>
<label for="eight_condition"><input type="radio" name="eight"  value="0" id="eight_condition" />Smiley face</label>
<br>
<h3>What does the icon below show?</h3> <img src="./images/refresh_icon2.png" width="75" height="75"/>
<label for="nine_string"><input type="radio" name="nine" value="0" id="nine_string" />Delete</label>
<label for="nine_join"><input type="radio" name="nine" value="0" id="nine_join" />Menu</label>
<label for="nine_info"><input type="radio" name="nine" value="0" id="nine_info" />Message delivered</label>
<label for="nine_condition"><input type="radio" name="nine"  value="1" id="nine_condition" />Refresh</label>
<br>
<h3>What does the icon below show?</h3> <img src="./images/chat_icon.png" width="75" height="75"/>
<label for="ten_string"><input type="radio" name="ten" value="1" id="ten_string" />Chat/Message</label>
<label for="ten_join"><input type="radio" name="ten" value="0" id="ten_join" />Tip</label>
<label for="ten_info"><input type="radio" name="ten" value="0" id="ten_info" />Help</label>
<label for="ten_condition"><input type="radio" name="ten"  value="0" id="ten_condition" />Calender</label>
<!-- create the questions -->

<button type="submit" value="Submit" style="color: white;">Submit</button>
<!-- creates submit button -->

<p> After clicking 'Submit' check the box at the top for your score </p>

</form>

<script type="text/javascript">


document.getElementById("form1").onsubmit=function() {
		 one = parseInt(document.querySelector('input[name = "one"]:checked').value);
	   two = parseInt(document.querySelector('input[name = "two"]:checked').value);
	   three = parseInt(document.querySelector('input[name = "three"]:checked').value);
	   four = parseInt(document.querySelector('input[name = "four"]:checked').value);
		 five = parseInt(document.querySelector('input[name = "five"]:checked').value);
		 six = parseInt(document.querySelector('input[name = "six"]:checked').value);
		 seven = parseInt(document.querySelector('input[name = "seven"]:checked').value);
		 eight = parseInt(document.querySelector('input[name = "eight"]:checked').value);
		 nine = parseInt(document.querySelector('input[name = "nine"]:checked').value);
		 ten = parseInt(document.querySelector('input[name = "ten"]:checked').value);


	   $result = one + two + three + four + five + six + seven + eight + nine + ten;

	document.getElementById("grade").innerHTML = $result;

	myWindow = window.open("http://localhost:8080/quiz-main/quiz-main/Project/extra.php?result="+ $result , "_blank", "width=200, height=100");
	//sleep(2);
//	myWindow.close();


return false; // required to not refresh the page; just leave this here
} //this ends the submit function


</script>
<!-- javascript script to calculate the total score by adding the submit values -->

</html>
<!--
References:

Quiz
Interactive Quiz https://codeactually.com/interactivequiz.html#addquestion
-->
