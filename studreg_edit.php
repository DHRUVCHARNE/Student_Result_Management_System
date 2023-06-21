<?php
//This is the screen shows filled form of the record to be edited and once the required changes are made and submit button clicked it is redirected
//to the execution file st_red_edit.php
session_start();
include("header.inc");
if ($_SESSION['loggedinAdmin'] != true) {
  echo "<script>location.replace('index.php');</script>";
}
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
<?php // Include the database connection file
include 'db_connect.php';

// Get id from URL parameter
$Eno = $_GET['Eno'];
$update_query = "SELECT * FROM stud_info WHERE Eno ='$Eno' ";
// Select data associated with this particular id
$result = mysqli_query($connection, $update_query);
// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);
$Eno = $resultData['Eno'];
$Sname = $resultData['Name'];
$Fname = $resultData['Father Name'];
$dob = $resultData['DOB'];
$sem = $resultData['Semester'];
$semail = $resultData['Studmail'];
?>

<body>
  <h1 style="text-align: center; font-weight:Bold;">Edit the Database</h1>
  <div class="container-lg">
    <div class="row">
      <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form class="card p-4 bg-light" name="edit" method="post" action="st_reg_edit.php">
          <div class="form-group row">
            <label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Enrollment No.</label>
            <input type="text" name="Eno" class="form-control" id="exampleInputEmail1" placeholder="Enrollment No."
              value="<?php echo $Eno; ?>" required>
          </div>
          <div class="form-group row">
            <label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Student Name</label>
            <input type="text" name="Sname" class="form-control" id="exampleInputEmail1" placeholder="Student Name"
              value="<?php echo $Sname; ?>" required>
          </div>
          <div class="form-group row">
            <label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Father Name</label>
            <input type="text" name="Fname" class="form-control" id="exampleInputEmail1" placeholder="Father Name"
              value="<?php echo $Fname; ?>" required>
          </div>
          <div class="form-group row">
            <label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Date-Of-Birth</label>
            <input type="date" name="dob" class="form-control" id="exampleInputEmail1" placeholder="Date-Of-Birth"
              value="<?php echo $dob; ?>" required>
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
          <div class="form-group row">
            <label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Student Email</label>
            <input type="email" name="semail" class="form-control" id="exampleInputEmail1" placeholder="Student Email"
              value="<?php echo $semail; ?>" required>
          </div>
          <div class="form-group row justify-content-center">
            <button type="submit" class="btn btn-primary" value="submitted" name="submit_reg">Submit</button>
          </div>
        </form>
        <div class="d-flex justify-content-center">
          <button type="button" onclick="window.history.back();" class="btn btn-primary btn-sm">Go Back</button>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
</body>
<?php include("footer.inc") ?>

</html>