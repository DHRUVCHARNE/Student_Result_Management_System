<?php
//You are redirected to this file if you click on the Admin button in index.php
//You have to fill login credentials which are hardcoded as email= demo@gmail.com and password=123 and they are checked in val_admin.php
//Where you are redirected after submtting the login credentials
session_start();
include("header.inc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <title>Admin Login</title>
</head>

<body>
  <h1 style="text-align: center;"><strong>Admin Login</strong></h1>
  <div class="container-lg">
    <div class="row">
      <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form class="card p-5 bg-light" action="val_admin.php" method="post" name="adm1_form" autocomplete="off">
          <div class="form-group row">
            <label for="exampleInputEmail1" class="form-label"><strong>Email address</strong></label>
            <input required name="admin_email" type="email" class="form-control" id="admin_email"
              autocomplete="username" aria-describedby="emailHelp">
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
            <input name="admin_passwd" type="password" class="form-control" id="admin_passwd"
              autocomplete="current-password" required>
          </div>
          <br>
          <div class="form-group row justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <span id="email_error" class="field_error">-</span>
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