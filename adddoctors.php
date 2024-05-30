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

    $Name_of_student = $_POST['Name_of_student'];
$RollNo=$_POST['RollNo'];
  $Branch = $_POST['Branch'];
    $Gender = $_POST['Gender'];
      $Name_of_companies = $_POST['Name_of_companies'];

    $CTC = $_POST['CTC'];

   


    $sql = "INSERT INTO `2023_total_placements`(`Name_of_student`, `RollNo`,`Branch`,`Gender`,`Name_of_companies`, `CTC`) VALUES ('$Name_of_student','$RollNo','$Branch','$Gender','$Name_of_companies','$CTC')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo '<script>alert("New Record CREATED Successfully!!")</script>';


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
  </style>
  </head>

<body>

<h2>New Doctor</h2>

<form action="" method="POST">

  <fieldset>

    <legend>placement details</legend>

    Name:<br>

    <input type="text" name="Name_of_student">

    <br>
    Roll No:<br>

<input type="text" name="RollNo">

<br>

        Age:<br>

        <input type="text" name="Age">

        <br>

            Branch:<br>

            <input type="text" name="Branch">

            <br>
            Gender:<br>

<input type="text" name="Gender">

<br>

                comaiines No :<br>

                <input type="text" name="Name_of_companies">

                <br>

    ctc :<br>

    <input type="text" name="CTC">

    <br>


    <a href=doctorlist.php><input type="submit" name="submit" value="submit">
</a>
<br><br>
<a href=doctorlist.php><button type=button class=button>Go Back</button></a>
  </fieldset>

</form>

</body>

</html>
