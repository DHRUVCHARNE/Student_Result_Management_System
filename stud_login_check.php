<?php
#predefined login & password for testing
session_start();
if (trim($_POST["stud_eno"]) == ""  or  trim($_POST["captcha_id"]) == "") {
    echo "Empty Field not accepted";
} else {
    // Check the user submitted data
    $eno_id = trim($_POST["stud_eno"]);
    $input_capid = trim($_POST["captcha_id"]);
    $cap_id = $_SESSION["vercode"]; #captcha id
    include "db_connect.php";
    $query = "SELECT Eno FROM stud_info WHERE Eno IN (SELECT Eno FROM stud_info WHERE Eno ='" . $eno_id . "')";
    // Prepare and execute the statement
    $result = mysqli_query($connection, $query);
    // Fetch the result
// Check if the result exists
    if ($result) {
        $res = mysqli_fetch_assoc($result);
        $log_eno = $res['Eno'];
        $cap_res = strcmp($cap_id, $input_capid); #checking for binary safe strcmp
        $eno_res = strcmp($log_eno, $eno_id);
        if ($cap_res == 0 && $eno_res == 0) {
            $_SESSION['loggedinstud'] = true;
            $_SESSION['student_eno'] = $log_eno;
            echo "<script>window.location.replace('studres.php')</script>";
        }
        if ($cap_res != 0 && $eno_res != 0) {
            echo "Invalid Enrollment No and Captcha ID";
        }
        if ($eno_res != 0 && $cap_res == 0) {
            echo "Invalid Enrollment" . $log_eno . "";
        }
        if ($cap_res != 0 && $eno_res == 0) {
            echo "Invalid Captcha Id";
        }
    }
    if (!$result) {
        $err_query = "Query execution failed: " . mysqli_error($connection);
        echo "Quey failed" . $err_query;

    }
}


?>