<?php
//This File Displays the stud_result table and shows buttons for addition,updation and deletion of records
// Include the database connection file
include 'db_connect.php';
session_start();
$result = mysqli_query($connection, "SELECT * FROM stud_result ORDER BY Eno");
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Student Result</title>
</head>

<body>
  <h3 style="text-align: center;"><strong>Student Results Database</strong></h3>
  <br>
  <div style="text-align: center;">
    <a href="studres_add.php" style="font-size:30px">
      Add to the Database
    </a>
  </div>
  <table class="table table-light table-bordered table-hover table-sm table-responsive-sm">
    <thead>
      <tr>
        <th scope="col"><strong>Enrollment No.</strong></th>
        <th scope="col"><strong>Course</strong></th>
        <th scope="col"><strong>Obtained Marks</strong></th>
        <th scope="col"><strong>Maximum Marks</strong></th>
        <th scope="col"><strong>Semester</strong></th>
        <th scope="col"><strong>Action</strong></th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Fetch the next row of a result set as an associative array
      while ($res = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $res['Eno'] . "</td>";
        echo "<td>" . $res['Course'] . "</td>";
        echo "<td>" . $res['ObtMarks'] . "</td>";
        echo "<td>" . $res['MaxMarks'] . "</td>";
        echo "<td>" . $res['Semester'] . "</td>";
        echo "<td><a href=\"studres_edit.php?Eno=$res[Eno]\">Edit</a> | 
        <a href=\"studres_delete.php?Eno=$res[Eno]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
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