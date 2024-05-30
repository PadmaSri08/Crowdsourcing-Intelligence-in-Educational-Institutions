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


if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `admin_login` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "<h1>Record DELETED Successfullu</h1>";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}

?>
