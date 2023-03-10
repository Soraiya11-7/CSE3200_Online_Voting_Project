<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Document</title>
   
</head>
<body class="container">
<div >
<div style="margin-top:30px;">
     <a style="text-align:left;margin-left:50px;" class='btn btn-success btn-sm mt-3 ' href='Advisor_Panel.php?'>Back</a>
</div>
    <h1 style="margin:20px; text-align:center; padding:50px,20px">Students Details</h1><br>
    <table class="table">
      <thead>
        <tr>
          <th>Roll</th>
          <th>Students Name</th>
          <th>Email Address</th>
          <th>Phone Number</th>
          <th>Action</th>
        </tr> 
      </thead> 
      
      <tbody>
      <?php
      require('conn.php');
      // $sql ="SELECT *, if(candidate_list.Roll is null, false, true) as is_candidate FROM students_info left join candidate_list using (Roll)";
      //<a class='btn btn-success btn-sm ".$disabled."' href='Mark_Cndidate.php?Roll=$data[Roll]'>Mark as Candidate</a>
        $advisor_id = $_COOKIE['ad_id'];
         $sql = "SELECT * , if(candidate_list.Roll is null, false, true) as is_candidate FROM students_info left join candidate_list using(Roll) WHERE Roll in
                                        (SELECT student_id FROM student_section_rel WHERE section_id=
                                                        (SELECT section_id FROM advisor_section_rel WHERE advisor_id = '$advisor_id'))";     
         $query = mysqli_query($conn,$sql);  
        if( $query){
        while($data = mysqli_fetch_assoc($query )){
        $disabled = $data['is_candidate'] == '1' ? 'disabled' : '';
        
        echo "<tr>
          
          <td>" .$data["Roll"] ."</td>
          <td>" .$data["Student_Name"] ."</td>
          <td>" .$data["Email_Address"] ."</td>
          <td>" .$data["Phone_Number"] ."</td>
          <td>
          <a class='btn btn-primary btn-sm' href='Edit_std2.php?Roll=$data[Roll]'>Edit</a>
          <a class='btn btn-success btn-sm ".$disabled."' href='Mark_Cndidate.php?Roll=$data[Roll]'>Mark as Candidate</a>
          <a class='btn btn-danger btn-sm' href='Delete_std.php?Roll=$data[Roll]'>Delete</a>
          </td>
        </tr>";
        }
      }


        ?>

      </tbody> 
  </table> 
<div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>
