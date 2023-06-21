<?php
//This is the execution file for adding the record
session_start();
if ($_SESSION['loggedinAdmin'] != true) {
    echo "<script>location.replace('index.php');</script>";
}
?>
<html>

<head>
    <title>Add Data</title>
    <script>
        function Alert_Window(text_a) {
            window.alert(text_a);
        }
    </script>
</head>

<body>
    <?php
    echo "page2";
    // Include the database connection file
    include 'db_connect.php';

    if (isset($_POST['submit_reg'])) {
        // Escape special characters in string for use in SQL statement	
        $eno = mysqli_real_escape_string($connection, $_POST['eno']);
        $course = mysqli_real_escape_string($connection, $_POST['course']);
        $obm = mysqli_real_escape_string($connection, $_POST['ObtMarks']);
        $mxm = mysqli_real_escape_string($connection, $_POST['MaxMarks']);
        $sem = mysqli_real_escape_string($connection, $_POST['sem']);

        // Show link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }
    // If all the fields are filled (not empty) 
    
    // Insert data into database
    $insert_query = "INSERT INTO stud_result (`Eno`, `Course`, `ObtMarks`,`MaxMarks`,`Semester`) VALUES ('$eno', '$course', '$obm','$mxm','$sem')";
    $result = mysqli_query($connection, $insert_query);
    if ($result == true) {
        echo "<script> Alert_Window('Record added successfully!'); </script>";
    } else {
        echo "<script> Alert_Window('Failed in Adding Data!'); </script>";
        echo "".mysqli_error($connection);
    }
    echo "<script>window.location='Admin_studres.php';</script>";
    ?>
</body>

</html>