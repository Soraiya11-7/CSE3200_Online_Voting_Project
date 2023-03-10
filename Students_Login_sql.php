<?php
require('conn.php');
if(isset($_POST['Email_Address']) && isset($_POST['Passwords'])){
    $email = $_POST['Email_Address'];
    // echo $email;
    $password = $_POST['Passwords'];
   
    $sql ="SELECT * FROM students_info where Email_Address='$email' LIMIT 1";

    $query = mysqli_query($conn,$sql);   
    $res = mysqli_fetch_array($query);
    // echo $password;
    // echo password_verify($password, $res['Passwords']);
    
 if(password_verify($password, $res['Passwords'])){
    setcookie('_roll', $res['Roll'], time() + (86400 * 30), "/");
    setcookie('_pass', $password, time() + (86400 * 30), "/");
    // setcookie("_roll", $res['Roll'], time() + (10*24*60*60), "/");
    echo '<script> 
    alert("Login Successfully");
    window.location="Voter_Panel.php";
    </script>' ;
    exit;
   }
    else{  echo '<script> 
        alert("Incorrect data");
        window.location="Students_Login.php";
        </script>' ;
      exit;} 
    }
?>