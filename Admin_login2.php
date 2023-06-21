<!DOCTYPE html>
<html lang="en">
<?php
session_start();
//Below is check for login
//This file shows two buttons Student Registration(to manipulate stud_info table) and
//Student Result(to manipulate stud_result table)
if ($_SESSION['loggedinAdmin'] != true) {
  echo "<script>location.replace('Admin_login.php');</script>";
}
include("header.inc");
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Student Registration vs Student Result</title>
  <script>
    function redirectAdminreg() {
      window.location = 'Admin_studreg.php'
    }
    function redirectAdminresult() {
      window.location = 'Admin_studres.php'
    }

  </script>
</head>

<body>
  <h3 style="text-align: center;">Student Login or Student Registration</h3>
  <br>
  <div class="container-lg">
    <div class="row">
      <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form class="card p-5 bg-light" name="adm1_form" onsubmit="val_admin()">
          <div class="form-group row">
            <div class="d-grid gap-3 center container">
              <button class="btn btn-primary" type="button" onclick="redirectAdminreg()">Student Registration</button>
              <button onclick="redirectAdminresult()" class="btn btn-primary" type="button">Student Result</button>
            </div>
          </div>
        </form>
        <br><br>
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