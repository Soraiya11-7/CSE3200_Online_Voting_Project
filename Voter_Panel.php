<?php
      require('conn.php');      
      $sql ="SELECT Roll FROM candidate_list";
      $query = mysqli_query($conn,$sql);    
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
      background-color :hsl(120,30%,70%); width:30%; padding:20px;float:left;
    }
    #vote{
      background-color :white;width:50%;padding:100px;float:right; }
    </style>
    
</head>
<body style="margin:80px;">

<div style="margin-left:100px;"><a href="Students_Login.php">
      <button type="button" name="Back" class="btn btn-success btn-block" >Back</button></a>
</div>
<div style="text-align:center;"><h3>Candidate info</h3></div>
<?php
    $sid = $_COOKIE['_roll'];
    $sql = "SELECT Roll, Student_Name, Email_Address from students_info WHERE ROll in
                (SELECT Roll FROM candidate_list WHERE Roll in 
                  (SELECT student_id FROM student_Section_Rel where section_id = 
                      (SELECT  section_id FROM student_section_rel WHERE student_id='$sid')))";
      $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
      // $sq1 = "SELECT Roll, Student_Name, Email_Address FROM students_info WHERE Roll='".$row['Roll']."'";
      // $res = mysqli_fetch_array(mysqli_query($conn, $sq1));
      echo '
        <div id="result" style="text-align:left;margin-left: 500px; margin-top: 2px">
        <b>Roll:    </b>'.$row['Roll'].'<br><br>
        <b>Name:    </b>'.$row['Student_Name'].'<br><br>
        <b>Email:   </b>'.$row['Email_Address'].'<br><br>
        
        <div style="margin-left:150px;"><a href="Voting.php?roll='.$row['Roll'].'">
          <button type="button" name="Back" class="btn btn-primary btn-block">Vote</button></a>
        </div>
        </div>
        </div>
      </div>
      ';
    }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>
