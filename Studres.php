<?php
//This File Displays the Result to the Student
session_start();
include("header.inc");
if (!isset($_SESSION['loggedinstud'])) {
  echo "<script>location.replace('index.php');</script>";
}
// Include the database connection file
include 'db_connect.php';
$eno = $_SESSION['student_eno'];
// Fetch data in descending order (lastest entry first)
$query1 = "SELECT * FROM stud_info WHERE Eno ='".$eno."'";
$query2 = "SELECT * FROM stud_result WHERE Eno ='".$eno."'";
$result = mysqli_query($connection, $query1);
$result2 = mysqli_query($connection, $query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Student Result</title>
</head>
<body>
  <h1 style="text-align: center;">Student Result</h1>
  <br>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col"><strong>Enrollment No.</strong></th>
        <th scope="col"><strong>Student Name</strong></th>
        <th scope="col"><strong>Father Name</strong></th>
        <th scope="col"><strong>Date-of-Birth</strong></th>
        <th scope="col"><strong>Semester</strong></th>
        <th scope="col"><strong>Student Email</strong></th>
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
      }
      ?>
    </tbody>
  </table>
  <br><br><br>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col"><strong>Enrollment No.</strong></th>
        <th scope="col"><strong>Course</strong></th>
        <th scope="col"><strong>Obtained Marks</strong></th>
        <th scope="col"><strong>Maximum Marks</strong></th>
        <th scope="col"><strong>Semester</strong></th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Fetch the next row of a result set as an associative array
      while ($res1 = mysqli_fetch_assoc($result2)) {
        echo "<tr>";
        echo "<td>" . $res1['Eno'] . "</td>";
        echo "<td>" . $res1['Course'] . "</td>";
        echo "<td>" . $res1['ObtMarks'] . "</td>";
        echo "<td>" . $res1['MaxMarks'] . "</td>";
        echo "<td>" . $res1['Semester'] . "</td>";
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