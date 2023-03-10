<?php
require('conn.php');

$id= $_GET['Roll'];
 $sql ="SELECT* FROM students_info where Roll=$id";
$query = mysqli_query($conn,$sql);  
$row=mysqli_fetch_assoc($query);

$id = $row['Roll']; 
$name = $row['Student_Name'];
$email =$row['Email_Address'];
$phone = $row['Phone_Number'];


 if(isset($_POST['submit']))
    {
        $id = $_POST['Roll']; 
        $name = $_POST['Student_Name'];
        $email =$_POST['Email_Address'];
        $phone = $_POST['Phone_Number'];

        $sql = "UPDATE students_info " .
          "SET Roll='$id', Student_Name='$name',Email_Address=' $email',Phone_Number='$phone'".
           "WHERE Roll=$id";
    $query = mysqli_query($conn,$sql);  
    if( $query){
        echo '<script> 
      alert("Updated Successfull");
      window.location="Students_list.php";
      </script>' ;
      
     }
      else{ 
          echo '<script> 
          alert("Updated Failed");
          window.location="Edit_std2.php";
          </script>' ;
        }
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add new students</title>
    <style>
   *{color:#fff;}
   body{
    background-image: url(Bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
.form-container { border:0px solid #fff ; padding: 50px 60px;
    margin-top: 5vh;
    -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
    box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
}
</style>
  
</head>
<body>
<div class="container-fluid bg mt-3S">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
                    <form class="form-container" method="POST">
                    <div class="form-name text-dark text-center  ">
                            <span><h3>Update Student Details<h3></span>
                        </div>
                        <div class="form-group">
                           <label for="Roll" >Roll</label>
                           <input type="text" class="form-control" id="Roll" name="Roll" value="<?php echo $id;?>" 
                           maxLength="7" minLength="7">
                        </div>
                        <div class="form-group mt-2">
                           <label for="Name" >Full Name</label>
                           <input type="text" class="form-control" id="Name" name="Student_Name"  value="<?php echo $name;?>">
                        </div>
                        
                        <div class="form-group mt-2">
                           <label for="Email">Email </label>
                           <input type="email" class="form-control" id="Email" name="Email_Address"  value="<?php echo $email;?>">
                        </div>
                        <div class="form-group mt-2">
                           <label for="Phone Number">Phone Number</label>
                           <input type="text" class="form-control" id="Phone_Number" name="Phone_Number"  value="<?php echo $phone;?>"
                           maxLength="11" minLength="11">
                        </div>
                       
                        <div class="form-group text-center mt-3">
                        <a href="Students_list.php"><button type="button" name="submit" class="btn btn-success btn-block">Back</button></a>
                           <button type="submit" name="submit" class="btn btn-success btn-block">Update</button>
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