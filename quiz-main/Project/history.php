<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
  $id = $user_data['user_id']

?> <!-- Ensures user is logged in -->

<!DOCTYPE html>

<title>History</title>

<div class='ripple-background'>
  <div class='circle small shade5'></div>
</div>

<div class="container">
  <div class="shadows" style="text-transform: none"><span>T</span><span>e</span><span>c</span><span>h</span><span> </span><span>T</span><span>e</span><span>s</span><span>t</span>
  </div>
</div>

<br>
<br>

<body>
<div class="container">
  <a class="button button-3" href="./quiz.php">Quiz</a>
  <a class="button button-3" href="./history.php">History</a>
  <a class="button button-3" href="./links.php">Links</a>
  <a class="button button-4" href="./logout.php">Logout</a>
<!-- </div> -->
<!-- 
<body>
    <div> -->
    <!-- -->
        <form class="box" action="./history.php" method="POST">
            <h1> RECORDS </h1>
            <input type="submit" name="record" value="SHOW RECORDS">
            <table class = "tb" style="color: white">
            <tr>
                <th> User_id </th>
                <th> Username</th>
                <th> Score </th>
                <th> Date/Time </th>
            </tr>
            <br>
                <?php
                    if(isset($_POST['record']))
                    {
                        $conn = new mysqli("localhost","root","","login_sample_db");

                        if(mysqli_connect_error())
                        {
                            echo "<script> alert('Unable to connect to Data Base')</script>";
                        }
                        else
                        {
                            $query = "SELECT * FROM results where user_id = '$id' ORDER BY id DESC;";
                            $result = mysqli_query($conn,$query);
                            
                            if(mysqli_num_rows($result)>0)
                            {
                            while($row = mysqli_fetch_array($result))
                            {
                                ?>
                                <tr>
                                    <td> <?php  echo $row['user_id']; ?> </td>
                                    <td> <?php  echo $row['user_name']; ?> </td>
                                    <td> <?php  echo $row['Score']; ?> </td>
                                    <td> <?php  echo $row['Date/Time']; ?> </td>
                                </tr>
                                <?php
                            }   
                          }
                          else
                          {
                            ?>
                            <h1> NO RECORDS TO SHOW RIGHT NOW </h1>
                            <?php
                          }
                        }  
                    }
                ?>
            </table>
        </form>
    </div>
</body>

<head>
<link rel="stylesheet" href="./style.css">
<style> 
input[type=submit] {
  width: 170px;
  padding-top: 30px;
  padding-bottom: 30px;
  color: #000;
  text-transform: uppercase;
  font-weight: 600;
  margin-left: 30px;
  margin-bottom: 30px;
  cursor: pointer;
  display: inline-block;
  text-align: center;
  border: 2px solid #0BAAD4;
  background-color: #0B94D4;
  border-radius: 20px;
  color: #fff;
  transition: .3s;
  box-shadow: 8px 8px #99bdff;
  transition: .3s;
}
</style>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th {
  border: 2px solid #0BAAD4;
  background-color: #0B94D4;
  border-radius: 20px;
  color: #fff;
  transition: .3s;
}

td {
  border: 1px solid #0000;
  text-align: center;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #99bdff;
}
</style>

</head>

<!-- basic houstyle formatting -->
</html>