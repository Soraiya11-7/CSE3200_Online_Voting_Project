<?php
      require('conn.php');
      $id= $_GET['Roll'];
       $sql ="SELECT Roll,Student_Name,Email_Address,Total_Vote FROM students_info join candidate_list using(Roll) where Roll=$id";
       $query = mysqli_query($conn,$sql);  
       $data = mysqli_fetch_assoc($query );

?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Document</title>
   <style>
    #result{
      background-color :hsl(120,30%,70%);
      width:30%;
      padding:20px;
      float:center;
      
    }
    </style>
    
</head>
<body style="margin:100px;">

<div style="margin-left:100px;"><a href="Results.php"><button type="button" name="Back" class="btn btn-success btn-block" >Back</button></a></div>
<div style="text-align:center;"><h3>Candidate Details</h3></div>
<div id="result" style="text-align:left;margin-left: 500px;">
  <b>Roll:    </b><?php echo $data['Roll']?><br><br>
  <b>Name:    </b><?php echo $data['Student_Name']?><br><br>
  <b>Email:   </b><?php echo $data['Email_Address']?><br><br>
  <b>Total Vote:   </b><?php echo $data['Total_Vote']?><br><br>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>
