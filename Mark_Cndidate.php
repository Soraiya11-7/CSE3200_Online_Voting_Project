<?php
require('conn.php');

$id= $_GET['Roll'];
 $sql ="SELECT Roll FROM students_info where Roll=$id";
$query = mysqli_query($conn,$sql);  
$row=mysqli_fetch_assoc($query);

$id = $row['Roll']; 

if(isset($_POST['Roll']))
    {
        $roll = $_POST['Roll']; 
        
        $sql ="INSERT INTO candidate_list(Roll,Total_Vote)
        VALUES('$roll',0)";

    $query = mysqli_query($conn,$sql);  
    if( $query){
      
        echo '<script> 
      alert("Inserted Successfull");
      window.location="Students_list.php";
      </script>' ;
     }
      else{ 
          echo '<script> 
          alert(" Failed");
          window.location="Edit_std2.php";
          </script>' ;
        }
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style11.css" rel="stylesheet" type="text/css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add new candidate</title>
    
</head>
<body>
<div class="container-fluid bg mt-3S">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
                    <form class="form-container" method="POST">
                    <div class="form-name text-dark text-center  ">
                            <span><h3>Select for Candidate<h3></span>
                        </div>
                        <div class="form-group">
                           <label for="Roll" >Roll</label>
                           <input type="text" class="form-control" id="Roll" name="Roll" value=<?php echo $id;?> 
                           maxLength="7" minLength="7">
                        </div>
                       
                       <div class="form-group text-center mt-3">
                       <a href="Students_list.php"><button type="button" name="submit" class="btn btn-success btn-block">Back</button></a>
                           <button type="submit" name="submit" class="btn btn-success btn-block">Mark as Candidate</button>
</div>
                    </form>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
</div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>