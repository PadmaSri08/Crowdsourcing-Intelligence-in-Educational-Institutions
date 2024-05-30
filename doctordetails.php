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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  table{
    padding-left:40px;
  }
table th{
  color:red;
}
.details{
  padding-top:40px;
  padding-left:120px;
}
  </style>
</head>
	<body>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-users"></i> Doctor Details </h3><hr>
		<div class="row">
		<?php
		if(isset($_GET["id"]))
		{
			$sql="SELECT * FROM doctors WHERE id=".$_GET["id"];
			$result=$conn->query($sql);
			//if($result->num_rows>0)
			if($result !== false && $result->num_rows > 0)
			{
				$row=$result->fetch_assoc();

		?>
			</div>

		</div>
    <div class=details>
		<div class="col-md-8">
		<table class="table table-bordered table-hover" align=center>
			<tr>
				<th>Name</th>
				<td><?php echo $row["name"];?></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><?php echo $row["age"];?></td>
			</tr>

			<tr>
				<th>Email</th>
				<td><?php echo $row["email"];?></td>
			</tr>
			<tr>
				<th>Mobile No</th>
			<td><?php echo $row["mobileno"];?></td>
			</tr>
			<tr>
				<th>Qualification</th>
				<td><?php echo $row["qualification"];?></td>
			</tr>
			<tr>
				<th>Designation</th>
				<td><?php echo $row["designation"];?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $row["address"];?></td>
			</tr>



		</table>
    <a href=doctorlist.php>
    <button type=button class="btn btn-primary"> Go Back</button></a>
		</div>
</div>

		<?php
			}
		}
		else
		{
		echo "<script>window.open('doctorlist.php','_self');</script>";
		}

		?>

	<!--	<form class="col-md-6" method="post" action="update_last.php">
			<div class="form-group">
				<label class="control-label text-primary" for="ldata">Last Donate Date</label>
				<input type="text"  placeholder="YYYY/MM/DD" required id="ldata" name="ldata"  class="form-control input-sm DATES">
			</div>
			<input type="hidden" name="id" value="<//?php echo $_GET["id"];?>">
			<button class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>

		</form>
	-->
		</div>
		</div>
	</div>
</div>

  <script>
  </script>

	</body>
</html>
