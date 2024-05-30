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

  //       $name = $_POST['name'];

  //       $user_id = $_POST['user_id'];
  // $age = $_POST['age'];
  //   $email = $_POST['email'];
  //   $mobileno = $_POST['mobileno'];

  //       $qualification = $_POST['qualification'];

  //       $designation = $_POST['designation'];
  //         $address = $_POST['address'];
  //         $image=$_POST['image'];


          $Name_of_student = $_POST['Name_of_student'];
          $id = $_POST['id'];
          $RollNo = $_POST['RollNo'];
          $Branch = $_POST['Branch'];
          $Gender = $_POST['Gender'];
          $Name_of_companies = $_POST['Name_of_companies'];
          $CTC  = $_POST['CTC'];
              
        $sql = "UPDATE `2023_total_placements` SET `Name_of_student`='$Name_of_student',`RollNo`='$RollNo',`Branch`='$Branch',`Gender`='$Gender' ,`Name_of_companies`='$Name_of_companies',`CTC`='$CTC' WHERE `id`='$id'";

        $result = $conn->query($sql);

        if ($result == TRUE) {


        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    }

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `2023_total_placements` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $Name_of_student = $row['Name_of_student'];

            $RollNo = $_POST['RollNo'];
            $Branch = $_POST['Branch'];
            $Gender = $_POST['Gender'];
            $Name_of_companies = $row['Name_of_companies'];

            $CTC  = $row['CTC'];
                


            $id = $row['id'];

        }

    ?>

        <h2>Placement Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Details</legend>

            Name:<br>

            <input type="text" name="Name_of_student" value="<?php echo $Name_of_student; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>
            Roll Number :<br>

            <input type="text" name="RollNo" value="<?php echo $RollNo; ?>">


            <br>
            Branch :<br>

            <input type="text" name="Branch" value="<?php echo $Branch; ?>">

            <br>
            Gender <br>

            <input type="text" name="Gender" value="<?php echo $Gender; ?>">

            <br>


            Name of Company:<br>

            <input type="text" name="Name_of_companies" value="<?php echo $Name_of_companies; ?>">

            <br>

           CTC:<br>

            <input type="text" name="CTC" value="<?php echo $CTC; ?>">

            <br>
           
<br>




        <br><br>
        <a href=doctorlist.php><button type=button class=button>Go Back</button></a>

          </fieldset>

        </form>

        </body>

        </html>

    <?php

    } else{

        header('Location: doctorlist.php');

    }

}

?>
