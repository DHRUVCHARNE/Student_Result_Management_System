<?php
//If you click  on student in index you reach here
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Student Login</title>
  <!--AJAX-JQuery Function to validate login credentials of student using enrollment no. and captcha code communicationg through ajax to stud_login_check.php-->
  <script>
    function check_s_login() {
      var stud_no = jQuery('#stud_eno').val();
      var cap_id = jQuery('#captcha_id').val();
      jQuery.ajax({
        url: '/stud_login_check.php',
        type: 'post',
        data: { stud_eno: stud_no, captcha_id: cap_id },
        success: function (result) {
          if (result.trim() != 'yes') {
            jQuery('#login_error').html(result.trim());
          }
        }
      });
    }
  </script>
</head>
<body>
  <h1 style="text-align: center;">Student Login</h1>
  <div class="row">
    <div class="mx-auto col-6 col-md-6 col-lg-4">
      <form class="card p-5 bg-light" method="post">
        <div class="form-group row">
          <label for="exampleInputEmail1"><strong>Enrollment No.</strong></label>
          <input name="stud_eno1" type="text" class="form-control" id="stud_eno" aria-describedby="emailHelp" required="">
        </div>
        <br>
        <div class="form-group row">
          <input name="captcha_id" type="text" placeholder="Enter below captcha code" class="form-control"
            id="captcha_id" aria-describedby="emailHelp" required>
        </div>
        <br>
        <div class="small d-flex justify-content-center">
          <span id="login_error" style="color:red"></span>
        </div>
        <br>
        <div class="small d-flex justify-content-center">
          <label class="checkbox-inline">Verification Code</label>
          &nbsp;&nbsp;<img src="captcha.php">
        </div><br>
        <div class="form-group row">
          <button type="button" class="btn btn-primary" onclick="check_s_login()">Submit</button>
        </div>
      </form>
      <div class="d-flex justify-content-center">
        <button type="button" onclick="window.history.back();" class="btn btn-primary btn-sm">Go Back</button>
      </div>
    </div>
  </div>
</body>
<br><br><br><br>
<?PHP include("footer.inc") ?>

</html>