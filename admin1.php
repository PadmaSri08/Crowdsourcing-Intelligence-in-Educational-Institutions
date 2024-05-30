<?php

session_start();


$server_name="localhost";
$username="root";
$password="";
$database_name="placement_data";

$conn = mysqli_connect($server_name,$username ,$password,$database_name);
if(!$conn)
{
    die("connection failed" . mysqli_connect_error());
}



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{
			$query = "select * from admin_login where email = '$email' limit 1";
			$result = mysqli_query($conn, $query);
			$i=0;
			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password'] === $password)
				{
					// $_SESSION['user_id'] = $user_data['user_id'];
					$_SESSION['id'] = $user_data['id'];
					$_SESSION['x'] = 2;
					$i=1;
					header("Location: adminpreface.html");
					die;
				}
			}

			if ($i==0)
			{
				echo '<script>alert("Please enter some valid information!")</script>';
			}
		}
		else
		{
			echo '<script>alert("Please enter some valid information!")</script>';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body style="background-image: url('66.jpg');">

	<style type="text/css">

h1{
	position:absolute;
	top:2%;
	left:45%;
}
	#text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
width: 100%;
}

#button{

padding: 10px;
width: 100px;
color: white;
background-color: darkmagenta;
border: none;
font-size: 22px;
}

#box{


color: white;
margin: auto;
width: 500px;
padding: 20px;
font-size: 25px;
}

a{
color: yellow;
}
label{
color: blue;
}


body {
/* background-image: url('img1.jpeg'); */
background-size: 100% 100%;
background-attachment: fixed;
background-repeat: no-repeat;
}

	</style>
<h1 align=center> Admin Login</h1><br><br>
	<div id="box"  scroll="no">

		<form method="post">
			<div>

			<br><label>Email:</label><br><input id="text" type="text" name="email" font-size= "25px"><br>
			<br><label>Password:</label><br><input id="text" type="password" name="password" font-size= "25px"><br><br>

			<?php
			// $query = "select * from customer where email = '$email' limit 1";
			// $result = mysqli_query($con, $query);
			?>
<a href=#><input type=submit></a>
			</div>
		</form>
	</div>
</body>
</html>
