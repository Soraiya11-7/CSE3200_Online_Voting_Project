<?php
require('conn.php');
if((isset($_GET['id'])) ){
    $id=$_GET['id'];

  $sql ="delete from advisor_section_rel where advisor_id='$id'" ;
          
 $query = mysqli_query($conn,$sql);    

 $sql ="delete from advisor_account_log where advisor_id='$id'" ;
          
 $query = mysqli_query($conn,$sql);  

 $sql ="delete from advisor where id='$id'" ;
          
 $query = mysqli_query($conn,$sql);
     

echo '<script> 
      alert("Data Deleted Successfully");
      window.location="Advisor_info.php";
      </script>' ;
}
//$select ="SELECT * from student_details ";
//$del =mysqli_query($conn,$select);   

    
     // header("Location: ../test1.php?submit=success");
     //mysqli_free_result( $query);
      //mysqli_Close($conn);
//} 


?>