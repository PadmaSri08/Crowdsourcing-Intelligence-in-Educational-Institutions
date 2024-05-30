<?php


$server_name="localhost";
$name="root";
$password="";
$database_name="placement_data";

$conn = mysqli_connect($server_name,$name ,$password,$database_name);
if(!$conn)
{
    die("connection failed" . mysqli_connect_error());
}


  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];


    $email = $_POST['email'];

    $password = $_POST['password'];


    $sql = "INSERT INTO `admin_login`(`firstname`, `email`, `password`) VALUES ('$first_name','$email','$password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();

  }

?>

<!DOCTYPE html>

<html>
<head>
  <style>
  body {
  background-color: #ff8d85;
  animation-name: event;
  animation-duration: 10s;
  animation-iteration-count:infinite;
}

@keyframes event {
  0%   {background-color:#ff9494;}
  15%  {background-color: #ff9b94;}
  30%  {background-color: #f1fc88;}
  45% {background-color: #fffcab;}
  60% {background-color: #97f587;}
  75% {background-color: pink;}
  90% {background-color: #fcdee9;}
}
form {
  line-height:20px;
}
  </style>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<h2>New Admin</h2>
<center>
<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:

    <input type="text" name="firstname">

    <br>
    Email:

    <input type="email" name="email">

    <br>

    Password:

    <input type="password" name="password">

    <br>
    <br>


    <a href=admindetails.php><input type="submit" class="btn btn-success" name="submit" value="submit">
</a>
<br><br>
<a href=admindetails.php><button type=button class="btn btn-warning">Go Back</button></a>
  </fieldset>

</form>
</center>
</body>

</html>
