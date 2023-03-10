<?php
require('conn.php');
if((isset($_POST['Roll']) &&  isset($_POST['Student_Name'])) && ((isset($_POST['Phone_Number'])) && (isset($_POST['Phone_Number']))) && isset($_POST['Passwords'])){
$roll = $_POST['Roll'];
$name = $_POST['Student_Name'];
$email = $_POST['Email_Address'];
$phone = $_POST['Phone_Number'];
$password = $_POST['Passwords'];
$section = $_POST['Section'];
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql ="INSERT INTO students_info(Roll,Student_Name,Email_Address,Passwords,Phone_Number)
      VALUES('$roll','$name','$email','$hashed_password','$phone')";

 $query = mysqli_query($conn,$sql);    
      if($query){
            if(mysqli_query($conn, "INSERT INTO student_section_rel(student_id, section_id) VALUES('$roll', '$section')")) {
                   //mysqli_query($conn, "INSERT INTO student_account_log(student_id, otp) VALUES('$roll', )");
                   echo '<script> 
                   alert("Data Inserted Successfully");
                   window.location="Students_Login.php";
                   </script>' ;
          } else {
                   echo '<script> 
                  alert("Failed");
                  window.location="Students_Login.php";
                  </script>' ;  
           }
            
      }
           // setcookie("ad_id", $row['id'], time() + 24*60*60*30, "/");
       //$sql2="INSERT INTO section_info(Series)VALUES(18)";
       //$query2 = mysqli_query($conn,$sq2);  // if($query2){
            //if(mysqli_query($conn, "INSERT INTO student_section_rel(student_id, section_id) VALUES('$roll', '$section')")) {
                 // mysqli_query($conn, "INSERT INTO student_account_log(student_id, otp) VALUES('$roll', )");
                
     
      else{ echo '<script> 
            alert("Failed");
            window.location="Students_Login.php";
            </script>' ;}   } 
      
else{   
      echo '<script> 
      alert("Failed");
      window.location="Students_Login.php";
      </script>' ;  

}

?>