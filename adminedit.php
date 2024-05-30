<?php


$server_name="localhost";
$username="root";
$password="";
$database_name="placement_data";

$conn = mysqli_connect($server_name,$username ,$password,$database_name);
if(!$conn)
{
    die("connection failed" . mysqli_connect_error());
}



    if (isset($_POST['update'])) {

        $firstname = $_POST['firstname'];

        $user_id = $_POST['user_id'];


        $email = $_POST['email'];

        $password = $_POST['password'];



        $sql = "UPDATE `admin_login` SET `firstname`='$firstname',`email`='$email',`password`='$password' WHERE `id`='$user_id'";

        $result = $conn->query($sql);

        if ($result == TRUE) {
          echo '<script>alert("Record Updated !!!")</script>';
        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    }

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `admin_login` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];


            $email = $row['email'];

            $password  = $row['password'];


            $id = $row['id'];

        }

    ?>
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
      </style>
      <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

        <h2>Admin Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="firstname" value="<?php echo $first_name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>


            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Password:<br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br>




        <input type="submit" value="Update" name="update">
        <br><br>
        <a href=admindetails.php><button type=button class=button>Go Back</button></a>

          </fieldset>

        </form>

        </body>

        </html>

    <?php

    } else{

        header('Location: usercreate.php');

    }

}

?>
