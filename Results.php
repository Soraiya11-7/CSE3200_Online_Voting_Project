<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Document</title>
   
</head>
<body >
<div class="container">
<div style="margin-top:50px;">
     <a style="text-align:left;" class='btn btn-success btn-sm mt-3 ' href='Admin_Panel.php?'>Back</a>
      <a style="margin-left:900px;" class='btn btn-success btn-sm mt-3 ' href='export.php?' title="Click to export">Download Result</a>
</div>
    <h1 style="text-align:center;">Results</h1><br>
    <table class="table">
      <thead>
        <tr>
          <th>Roll</th>
          <th>Students Name</th>
          <th>Rank(Total_Vote)</th>
          <th>Action</th>
        </tr> 
      </thead> 
      
      <tbody>
      <?php
      require('conn.php');
      $ad_id = $_COOKIE['ad_id'];
       $sql ="select t.roll Roll, t.total_vote Total_Vote, Student_Name, email_address from students_info
       JOIN
       (select Roll, total_vote from candidate_list where roll in (select student_id from student_section_rel where section_id=(select section_id from advisor_section_rel where advisor_id='$ad_id'))) t
       on students_info.roll=t.roll;";
       $query = mysqli_query($conn,$sql);  
        if( $query){
        while($data = mysqli_fetch_assoc($query )){
        echo "<tr>
          
          <td>" .$data["Roll"] ."</td>
          <td>" .$data["Student_Name"] ."</td>
          <td>" .$data["Total_Vote"] ."</td>
          <td>
          <a class='btn btn-primary btn-sm' href='View_Details.php?Roll=$data[Roll]'>View</a>
         </td>
        </tr>";
        }}
        else {
            ?>
           <tr><td colspan="3">No data found...</td></tr>
           <?php 
        }
     ?>

      </tbody> 
  </table> 
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>
