<?php

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						$_SESSION['user_name'] = $user_data['user_name'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo '<script>alert("wrong username or password!")</script>';
		}else
		{
			echo '<script>alert("wrong username or password!")</script>';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<head>
	<link rel="stylesheet" href="./style.css">
</head>

<body>

	<style type="text/css">
	body {
		text-transform: none;
	}

	#text{ /* css styling for text*/

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{ /* css styling for the button */

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{ /* css styling for the containers */

		background-color: #0BAAD4;
		margin: auto;
		width: 300px;
		padding: 20px;
		font-family: Arial, sans-serif;
	}
/* styling for the login form */
	</style>

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
	<!-- basic houstyle formatting -->

	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;">Login</div>

			<input id="text" type="text" name="user_name"><br>Username<br>
			<br>
			<input id="text" type="password" name="password"><br>Password<br>
			<br>
			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
			<!-- create the login function and sighnut link -->
		</form>
	</div>
</body>
</html>
