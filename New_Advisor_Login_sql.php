<?php
require('conn.php');


require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer;
$mail->isSMTP();
// $mail->SMTPDebug = 2;
$mail->Host = 'us2.smtp.mailhostbox.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'noreply@j404.tech';
$mail->Password = 'YEbT!Atm5';
$mail->setFrom('noreply@j404.tech', 'Voting System');


if((( isset($_POST['fullname'])) && (isset($_POST['email']))) && (isset($_POST['Series']) && isset($_POST['Section']) ))
//isset($_POST['password'])
{
$name = $_POST['fullname'];
$email = $_POST['email'];
$Section = $_POST['Section'];
$sql1 ="INSERT INTO advisor(fullname,email) VALUES('$name','$email')";
$query1 = mysqli_query($conn, $sql1);
if ($query1) {
      $id = mysqli_insert_id($conn);
      $sql2 ="INSERT INTO advisor_section_rel(advisor_id, section_id) VALUES('$id', '$Section')";
      
      //$query = mysqli_query($conn,$sql1);    
      $query2 = mysqli_query($conn,$sql2);    
      if($query2){
            $otp = str_pad(random_int(0, 999999), 6, 0, STR_PAD_LEFT);
            if (mysqli_query($conn, "INSERT INTO advisor_account_log(advisor_id, otp) VALUES('$id', '$otp')")){
                  
                  $section_text = mysqli_fetch_assoc(mysqli_query($conn, "SELECT Section FROM section WHERE id='$Section' LIMIT 1"))['Section'];

                  $mail->addAddress($email, $name);
                  $mail->Subject = 'Activate account';
                  $mail->Body = 'Hello '.$name.', you have been asigned as course advisor for section '.$section_text.' series '.$_POST['Series'].'.
                                 Click the link to activate and set password http://localhost/php_project/activate_advisor.php?id='.$id.'&code='.$otp;
                  if($mail->send()) {
                        echo '<script> 
                        alert("Data Inserted Successfully");
                        window.location="Admin_Panel.php";
                        </script>' ;
                  } else {
                        echo '<script> 
                        alert("Failed");
                        window.location="Add_New_Advisor.php";
                        </script>' ;
                  }
            } else {
                  echo '<script> 
                  alert("Failed");
                  window.location="Add_New_Advisor.php";
                  </script>' ;
            }

      }
      else{ echo '<script> 
            alert("Failed");
            window.location="Add_New_Advisor.php";
            </script>' ;}    
      }
} else{
       echo '<script> 
      alert("Failed");
      window.location="Add_New_Advisor.php";
      </script>' ;
}    
?>