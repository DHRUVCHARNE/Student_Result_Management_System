<?php
//This file is to delete the selected record once you click on delete option in the Admin_studres.php
session_start();
if ($_SESSION['loggedinAdmin'] != true) {
    echo "<script>location.replace('index.php');</script>";
}
// Include the database connection file
require_once("db_connect.php");

// Get id parameter value from URL
$eno = $_GET['Eno'];

// Delete row from the database table
$result = mysqli_query($connection, "DELETE FROM stud_result WHERE Eno ='$eno' ");

if ($result == true) {
    echo "<script> window.alert('Record deleted successfully!'); </script>";
} else {
    echo "<script> window.alert('Failed in deleting Data!'); </script>";
}
echo "<script>window.location='Admin_stdres.php';</script>";
?>