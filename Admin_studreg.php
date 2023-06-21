<?php
//This File Displays the stud_info table and shows buttons for addition,updation and deletion of records
session_start();
// Include the database connection file
include 'db_connect.php';
include("header.inc");
// Fetch data in descending order (lastest entry first)
$result = mysqli_query($connection, "SELECT * FROM stud_info ORDER BY Eno");
if ($_SESSION['loggedinAdmin'] != true) {
  echo "<script>location.replace('index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <br><br><br> 

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Student Registration</title>
</head>

<body>
  <h3 style="text-align: center;"><strong>Student Registration Database</strong></h3>
  <br><br><br>
  <div style="text-align: center;">
    <a href="studreg_add.php" style="font-size:30px">
      Add to the Database
    </a>
  </div>
  <table class="table table-light table-hover table-sm table-bordered table-responsive-sm">
    <thead>
      <tr>
        <th scope="col"><strong>Enrollment No.</strong></th>
        <th scope="col"><strong>Student Name</strong></th>
        <th scope="col"><strong>Father Name</strong></th>
        <th scope="col"><strong>Date-of-Birth</strong></th>
        <th scope="col"><strong>Semester</strong></th>
        <th scope="col"><strong>Student Email</strong></th>
        <th scope="col"><strong>Edit or Delete</strong></th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Fetch the next row of a result set as an associative array
      while ($res = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $res['Eno'] . "</td>";
        echo "<td>" . $res['Name'] . "</td>";
        echo "<td>" . $res['Father Name'] . "</td>";
        echo "<td>" . $res['DOB'] . "</td>";
        echo "<td>" . $res['Semester'] . "</td>";
        echo "<td>" . $res['Studmail'] . "</td>";
        echo "<td><a href=\"studreg_edit.php?Eno=$res[Eno]\">Edit</a> | 
        <a href=\"studreg_delete.php?Eno=$res[Eno]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
      }
      ?>
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
    <button type="button" onclick="window.history.back();" class="btn btn-primary btn-sm">Go Back</button>
      </div>
</body>
<br><br><br><br>
<?php include("footer.inc") ?>

</html>