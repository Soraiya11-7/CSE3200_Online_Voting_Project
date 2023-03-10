<?php
require('conn.php');
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql ="SELECT* FROM advisor where email='$email' AND password='$password' limit 1";

$query = mysqli_query($conn,$sql);   
$row = mysqli_fetch_assoc($query);
 if( mysqli_num_rows($query)==1){
  setcookie("ad_id", $row['id'], time() + 24*60*60*30, "/");
    echo '<script> 
    alert("Login Successfully");
    window.location="Advisor_Panel.php";
    </script>' ;
    exit;
   }
    else{  echo '<script> 
        alert("Incorrect data");
        window.location="Advisor_Login.php";
        </script>' ;
      exit;} 
    }
?>