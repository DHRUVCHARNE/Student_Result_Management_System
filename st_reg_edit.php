<?php
//This is the execution file for updating the record
session_start();
if ($_SESSION['loggedinAdmin'] != true) {
    echo "<script>location.replace('index.php');</script>";
}
// Include the database connection file
require_once("db_connect.php");

if (isset($_POST['submit_reg'])) {
    // Escape special characters in a string for use in an SQL statement
    $Eno = mysqli_real_escape_string($connection, $_POST['Eno']);
    $Sname = mysqli_real_escape_string($connection, $_POST['Sname']);
    $Fname = mysqli_real_escape_string($connection, $_POST['Fname']);
    $dob = mysqli_real_escape_string($connection, $_POST['dob']);
    $sem = mysqli_real_escape_string($connection, $_POST['sem']);
    $semail = mysqli_real_escape_string($connection, $_POST['semail']);

    // Update the database table
    $result = mysqli_query($connection, "UPDATE stud_info SET `DOB` = '$dob', `Name` = '$Sname', `Father Name` = '$Fname',`Semester` = '$sem',`Studmail` = '$semail' WHERE `Eno` ='$Eno' ");

    // Display success message
    if ($result == true) {
        echo "<script> window.alert('Record updated successfully!'); </script>";
    } else {
        echo "<script> window.alert('Failed in updating Data!'); </script>";
    }
    echo "<script>window.location='Admin_studreg.php';</script>";

}