<?php 
  require('conn.php');
  //$Series= $_GET['Series'];
    $query ="SELECT DISTINCT Series FROM section";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style11.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration</title>
    
</head>
<body>
<div class="container-fluid bg mt-3S">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
                    <form class="form-container" action="New_Advisor_Login_sql.php" method="POST">
                    <div class="form-name text-dark text-center  ">
                            <span><h3>Add new Advisor<h3></span>
                        </div>
                        
                        <div class="form-group mt-2">
                           <label for="Name" >Full Name</label>
                           <input type="text" class="form-control" id="Name" name="fullname" placeholder="Enter Full Name" required="required">
                        </div>
                        
                        <div class="form-group mt-2">
                           <label for="Email">Email </label>
                           <input type="email" class="form-control" id="Email" name="email" placeholder="Enter Email address" required="required">
                        </div>
                           
                  
                        <div class="form-group mt-2">
                           <label for="Series">Select a Series </label>

                          
                           <select name="Series" id = "Series"  style="color:black;text-decoration:none;background-color: gray">
                           <option value="0">---</option>
                           <?php 
                           foreach ($options as $option){
                           ?>
                          <option><?php echo $option['Series']; ?> </option>
                           <?php 
                             }
                        ?>
                          </select>
       
                       </div>

                        <div class="form-group mt-2">
                           <label for="Section">Section </label>
                           <select name = "Section" id = "Section" style="color:black;text-decoration:none; background-color: gray">
                           <!-- <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option> -->
                           </select>
                             </div>
                       
                         <div class="form-group text-center mt-3">
                            <a href="Admin_Panel.php"><button type="button" name="Back" class="btn btn-success btn-block" >Back</button></a>
                           <button type="submit" name="submit" class="btn btn-success btn-block">Assign</button>
                           </div>
                           
                            
                           </div>
                    </form>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>

    </div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <script src="js/add_advisor.js"></script>
</body>
</html>