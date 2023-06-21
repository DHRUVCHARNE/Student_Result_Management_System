<?php
//This is a Simple Web Development Project in PHP On Student Result Management System 
//It uses HTML,CSS and JavaScript with BootStrap Library in the Frontend
//It uses PHP,AJAX and JQuery in the backend
//It uses MySOL in the development of Database
//It draws data from the database student result which has two database stud_info and  stud_result;
//This is the first screen having two buttons: Admin or Student 
session_start();
//header
include("header.inc") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <title>Student or Admin</title>
  <script>
    //Code for redirection on the basis whether you are a student or admin
    function redirectAdmin() {
      window.location = 'Admin_login.php'
    }
    function redirectStud() {
      window.location = 'Stud_login.php'
    } 
  </script>
</head>

<body>
  <br><br><br>
  <h3 style="text-align: center;">Student or Admin</h3>
  <br>
  <div class="container-lg">
    <div class="row">
      <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form class="card p-5 bg-light">
          <div class="form-group row">
            <div class="d-grid gap-3 center container">
              <button class="btn btn-primary" type="button" onclick="redirectAdmin()">Admin</button>
              <button onclick="redirectStud()" class="btn btn-primary" type="button">Student</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<br><br><br><br>
<?php include("footer.inc") ?>

</html>