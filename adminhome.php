<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
*{
  list-style:none;
  text-decoration: none;
}
.headings{
  float:left;
  width:200px;
  line-height: 20px;
  background: #7d84f0;
  position:fixed;
}

.user{
  margin:10px;
  background:#c2fffd;
  border:0px solid;
  border-radius:20px;
margin-right:650px;
padding:4px;
height:90px;
align-items:center;
}
.admin{
  margin:10px;
  background:#d5fa9b;
  border:0px solid;
  border-radius:20px;
margin-right:650px;
padding:4px;
height:90px;

}
.appointments{
  margin:10px;
  margin-right:650px;
  background:#ffc9c2;
  border:0px solid;
  border-radius:20px;
  padding:4px;
  height:90px;


}
.nurse{
  margin:10px;
  background:#dbbade;
  border:0px solid;
  border-radius:20px;
margin-right:650px;
padding:4px;
height:90px;

}
.cleaners{
  margin:10px;
  background:#f7888a;
  border:0px solid;
  border-radius:20px;
margin-right:650px;
padding:4px;
height:90px;

}
.payments{
  margin:10px;
  background:#f7da9c;
  border:0px solid;
  border-radius:20px;
margin-right:650px;
padding:4px;
height:90px;

}
.user:hover{
  background:yellow;
}
.admin:hover{
  background:yellow;
}
.appointments:hover{
  background:yellow;
}
.nurse:hover{
  background:yellow;
}
.cleaners:hover{
  background:yellow;
}
.payments:hover{
  background:yellow;
}
  </style>
  </head>
  <body>
    <div class=container>
    <div class=row>
<div class=user>
      <h3>Total Users</h3>
      <div class="col-lg-3">
        <?php


        $server_name="localhost";
        $username="root";
        $password="";
        $database_name="placement_data";

        $con = mysqli_connect($server_name,$username ,$password,$database_name);
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql="SELECT * from admin_login";

        if ($result=mysqli_query($con,$sql))
          {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
          echo "<div class=users>";
          printf(" %d Users\n",$rowcount);
          echo "</div>";
          // Free result set
          mysqli_free_result($result);
          }
        mysqli_close($con);
        ?>


      </div>
</div>

<div class=admin>

      <h3>Admin Details</h3>
      <div class="col-lg-3">
        <?php


        $server_name="localhost";
        $username="root";
        $password="";
        $database_name="placement_data";

        $con = mysqli_connect($server_name,$username ,$password,$database_name);
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql="SELECT * from admin_login";

        if ($result=mysqli_query($con,$sql))
          {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
          echo "<div class=users>";
          printf(" %d Admins\n",$rowcount);
          echo "</div>";
          // Free result set
          mysqli_free_result($result);
          }
        mysqli_close($con);
        ?>


      </div>
</div>


<div class=appointments>
      <h3>Total Placements</h3>
      <div class="col-lg-3">
        <?php
        $con=mysqli_connect("localhost","root","","placement_data");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql="SELECT * from 2023_total_placements";

        if ($result=mysqli_query($con,$sql))
          {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
          echo "<div class=users>"; printf(" %d Placements\n",$rowcount); echo "</div>";
          // Free result set
          mysqli_free_result($result);
          }
        mysqli_close($con);
        ?>
      </div>
</div>



<!--<div class=nurse>
      <h3>Total Nurses</h3>
      <div class="col-lg-3">
        <?php
        $con=mysqli_connect("localhost","root","","hospital");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql="SELECT * from nurse";

        if ($result=mysqli_query($con,$sql))
          {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
        echo "<div class=users>";
          printf(" %d Nurses\n",$rowcount);
          echo "</div>";
          // Free result set
          mysqli_free_result($result);
          }
        mysqli_close($con);
        ?>
      </div>

</div>-->


<!--<div class=cleaners>
      <h3>Total Cleaners</h3>
      <div class="col-lg-3">
        <?php
        $con=mysqli_connect("localhost","root","","hospital");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql="SELECT * from cleaners";

        if ($result=mysqli_query($con,$sql))
          {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
          echo "<div class=users>";
          printf(" %d Cleaners\n",$rowcount);
          echo "</div>";
          // Free result set
          mysqli_free_result($result);
          }
        mysqli_close($con);
        ?>
      </div>
</div> -->


<!--<div class=payments>
      <h3>Total Payments Forms</h3>
      <div class="col-lg-3">
        <?php
        $con=mysqli_connect("localhost","root","","hospital");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql="SELECT * from payment";

        if ($result=mysqli_query($con,$sql))
          {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
        echo "<div class=users>";
          printf(" %d Payments\n",$rowcount);
          echo "</div>";
          // Free result set
          mysqli_free_result($result);
          }
        mysqli_close($con);
        ?>*/
      </div>

</div>-->


  </div>
    </body>
</html>
