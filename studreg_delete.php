<?php
//This File is to execute the deletion of the record once the delete button is clicked in the Admin_studreg.php
session_start();
if ($_SESSION['loggedinAdmin'] != true) {
    echo "<script>location.replace('index.php');</script>";
}
// Include the database connection file
require_once("db_connect.php");

// Get id parameter value from URL
$eno = $_GET['Eno'];

// Delete row from the database table
$result = mysqli_query($connection, "DELETE FROM stud_info WHERE Eno ='$eno' ");

if ($result == true) {
    echo "<script> window.alert('Record deleted successfully!'); </script>";
} else {
    echo "<script> window.alert('Failed in deleting Data!'); </script>";
}
echo "<script>window.location='Admin_studreg.php';</script>";
?>