<?php
//This is the screen shows filled form of the record to be edited and once the required changes are made and submit button clicked it is redirected
//to the execution file st_res_edit.php 
session_start();
include("header.inc") ;
if ($_SESSION['loggedinAdmin'] != true) {
	echo "<script>location.replace('index.php');</script>";
}

// Include the database connection file
include 'db_connect.php';

// Get id from URL parameter
$Eno = $_GET['Eno'];
$update_query = "SELECT * FROM stud_result WHERE Eno ='$Eno' ";
// Select data associated with this particular id
$result = mysqli_query($connection, $update_query);
// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);
$Eno = $resultData['Eno'];
$Course = $resultData['Course'];
$ObtMarks = $resultData['ObtMarks'];
$MaxMarks = $resultData['MaxMarks'];
$sem = $resultData['Semester'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Edit Data</title>
</head>
<br><br>

<body>
	<h1 style="text-align: center; font-weight:Bold;">Edit the Database</h1>
	<div class="container-lg">
		<div class="row">
			<div class="mx-auto col-10 col-md-8 col-lg-6">
				<form class="card p-4 bg-light" name="edit" method="post" action="st_res_edit.php">
					<div class="form-group row">
						<label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Enrollment No.</label>
						<input type="text" name="Eno" class="form-control" id="exampleInputEmail1"
							placeholder="Enrollment No." value="<?php echo $Eno; ?>" required>
					</div>
					<div class="form-group row">
						<label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Course</label>
						<input type="text" name="Course" class="form-control" id="exampleInputEmail1"
							placeholder="Course" value="<?php echo $Course; ?>" required>
					</div>
					<div class="form-group row">
						<label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Obtained Marks</label>
						<input type="text" name="ObtMarks" class="form-control" id="exampleInputEmail1"
							placeholder="ObtMarks" value="<?php echo $ObtMarks; ?>" required>
					</div>
					<div class="form-group row">
						<label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Maximum Marks</label>
						<input type="text" name="MaxMarks" class="form-control" id="exampleInputEmail1"
							placeholder="MaxMarks" value="<?php echo $MaxMarks; ?>" required>
					</div>
					<div class="form-group row">
						<label for="exampleInputEmail1" class="form-label">Semester</label>
						<select class="select" name="sem" value="<?php echo $sem; ?>" required>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
							<option value="4">Four</option>
							<option value="5">Five</option>
							<option value="6">Six</option>
							<option value="7">Seven</option>
							<option value="8">Eight</option>
						</select>
					</div>
					<div class="form-group row justify-content-center">
						<button type="submit" class="btn btn-primary" value="submitted"
							name="submit_res">Submit</button>
					</div>
				</form>
				<div class="d-flex justify-content-center">
					<button type="button" onclick="window.history.back();" class="btn btn-primary btn-sm">Go
						Back</button>
					
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br>
</body>
<?php include("footer.inc") ?>

</html>