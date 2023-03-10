<?php
    require('conn.php');
    if (isset($_POST['id']) && isset($_POST['code']) && isset($_POST['password1']) && isset($_POST['password2'])) {
        $advisor_id = $_POST['id'];
        $code = $_POST['code'];
        $pass1 = $_POST['password1'];
        $pass2 = $_POST['password2'];
        if ($pass1 != $pass2) {
            die('Password mismatched!');
        }
        $sql = "SELECT * FROM advisor_account_log WHERE advisor_id='$advisor_id' AND otp='$code' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        if (mysqli_num_rows($query) == 1 && $row['is_activated'] == false) {
            $sql2 = "UPDATE advisor SET password='$pass1' WHERE id='$advisor_id'";
            $sql3 = "UPDATE advisor_account_log SET is_activated=1 WHERE advisor_id='$advisor_id'";
            if (mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {
                header("Location: http://localhost/php_project/Advisor_Login.php");
            } else {
                die('Something went wrong :(');
            }
        } else {
            die('Access denied');
        }
    } else {
        die('Access denied');
    }
?>