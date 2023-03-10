<?php
require('conn.php');

$id= $_GET['id'];
 $sql ="SELECT* FROM advisor where id=$id";
$query = mysqli_query($conn,$sql);  
$row=mysqli_fetch_assoc($query);

$id = $row['id']; 
$name = $row['fullname'];
//$email = $row['email'];




 if(isset($_POST['submit']))
    {
        $id = $_POST['id']; 
        $name = $_POST['fullname'];
       

        $sql = "UPDATE advisor " .
          "SET fullname='$name'".
           "WHERE id=$id";
    $query = mysqli_query($conn,$sql);  
    if( $query){
        echo '<script> 
      alert("Updated Successfull");
      window.location="Advisor_info.php";
      </script>' ;
      
     }
      else{ 
          echo '<script> 
          alert("Updated Failed");
          window.location="Edit_adv.php";
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
                           <label for="id" >ID</label>
                           <input type="text" class="form-control" id="id" name="id" value="<?php echo $id;?>" >
                        </div>
                        <div class="form-group mt-2">
                           <label for="name" >Full Name</label>
                           <input type="text" class="form-control" id="fullname" name="fullname"  value="<?php echo $name;?>">
                        </div>
                        
                       
                        <div class="form-group text-center mt-3">
                        <a href="Advisor_info.php"><button type="button" name="submit" class="btn btn-success btn-block">Back</button></a>
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