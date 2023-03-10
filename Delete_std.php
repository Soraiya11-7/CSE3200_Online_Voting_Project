<?php
require('conn.php');
if((isset($_GET['Roll'])) ){
    $id=$_GET['Roll'];

  $sql ="DELETE FROM students_info WHERE Roll=$id";
 $query = mysqli_query($conn,$sql);    
     

echo '<script> 
      alert("Data Deleted Successfully");
      window.location="A_std_list.php";
      </script>' ;
}
//$select ="SELECT * from student_details ";
//$del =mysqli_query($conn,$select);   

    
     // header("Location: ../test1.php?submit=success");
     //mysqli_free_result( $query);
      //mysqli_Close($conn);
//} 


?>