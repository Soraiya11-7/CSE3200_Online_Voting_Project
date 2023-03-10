<?php
require('conn.php');
if((isset($_GET['Roll'])) ){
    $id=$_GET['Roll'];

  $sql ="DELETE FROM candidate_list WHERE Roll=$id";
 $query = mysqli_query($conn,$sql);    
     

echo '<script> 
      alert("Data Deleted Successfully");
      window.location="A_candidate_list.php";
      </script>' ;
}

?>