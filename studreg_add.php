<?php
//This is the screen shows form to be filled and once submit button is clicked it is redirected
//to the execution file st_reg_add.php
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
  <title>Add to the Database</title>
</head>
<br><br><br>

<body>
  <h1 style="text-align: center; font-weight:Bold;">Add to the Database</h1>
  <div class="container-lg">
    <div class="row">
      <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form class="card p-4 bg-light" action="st_reg_add.php" method="post">
          <div class="form-group row">
            <label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Enrollment No.</label>
            <input type="text" name="eno" class="form-control" id="exampleInputEmail1" placeholder="Enrollment No."
              required>
          </div>
          <div class="form-group row">
            <label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Student Name</label>
            <input type="text" name="sname" class="form-control" id="exampleInputEmail1" placeholder="Student Name"
              required>
          </div>
          <div class="form-group row">
            <label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Father Name</label>
            <input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Father Name"
              required>
          </div>
          <div class="form-group row">
            <label style="padding: 16px;" for="exampleInputEmail1" class="form-label">Date-Of-Birth</label>
            <input type="date" name="dob" class="form-control" id="exampleInputEmail1" placeholder="Date-Of-Birth"
              required>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail1" class="form-label">Semester</label>
            <select class="select" name="sem" required>
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
              required>
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
</body>
<br><br><br><br>
<?php include("footer.inc") ?>

</html>