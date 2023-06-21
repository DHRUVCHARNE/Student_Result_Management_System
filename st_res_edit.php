<?php
//This is the execution file for updating the record
session_start();
if ($_SESSION['loggedinAdmin'] != true) {
    echo "<script>location.replace('index.php');</script>";
}
// Include the database connection file
require_once("db_connect.php");

if (isset($_POST['submit_res'])) {
    // Escape special characters in a string for use in an SQL statement
    $Eno = mysqli_real_escape_string($connection, $_POST['Eno']);
    $Course = mysqli_real_escape_string($connection, $_POST['Course']);
    $ObtMarks = mysqli_real_escape_string($connection, $_POST['ObtMarks']);
    $MaxMarks = mysqli_real_escape_string($connection, $_POST['MaxMarks']);
    $sem = mysqli_real_escape_string($connection, $_POST['sem']);

    // Update the database table
    $result = mysqli_query($connection, "UPDATE stud_result SET `Course` = '$Course', `ObtMarks` = '$ObtMarks', `MaxMarks` = '$MaxMarks',`Semester` = '$sem' WHERE `Eno` ='$Eno' ");

    // Display success message
    if ($result == true) {
        echo "<script> window.alert('Record updated successfully!'); </script>";
    } else {
        echo "<script> window.alert('Failed in updating Data!'); </script>";
    }
    echo "<script>window.location='Admin_studres.php';</script>";

}