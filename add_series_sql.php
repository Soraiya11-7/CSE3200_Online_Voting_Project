<?php
require('conn.php');
if(isset($_POST['Section']) && isset($_POST['Series'])){
$Section = $_POST['Section'];
$Series = $_POST['Series'];

//$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql ="INSERT INTO section(Section,Series)
      VALUES('$Section','$Series')";

 $query = mysqli_query($conn,$sql);    
      if($query){
      
      echo '<script> 
      alert("Data Inserted Successfully");
      window.location="Admin_Panel.php";
      </script>' ;
     }
      else{ echo '<script> 
            alert("Failed1");
            window.location="Admin_Panel.php";
            </script>' ;}    
      }
else{   
      echo '<script> 
      alert("Failed2");
      window.location="Admin_Panel.php";
      </script>' ;  

}
