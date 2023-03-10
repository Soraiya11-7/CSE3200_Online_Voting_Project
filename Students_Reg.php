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
                    <form class="form-container" action="Students_Reg_sql.php" method="POST">
                    <div class="form-name text-dark text-center  ">
                            <span><h3>Registration<h3></span>
                        </div>
                        <div class="form-group">
                           <label for="Roll" >Roll</label>
                           <input type="text" class="form-control" id="Roll" name="Roll" placeholder="Enter your Roll Number" required="required"
                           maxLength="7" minLength="7">
                        </div>
                        <div class="form-group mt-2">
                           <label for="Name" >Full Name</label>
                           <input type="text" class="form-control" id="Name" name="Student_Name" placeholder="Enter your Full Name" required="required">
                        </div>
                        
                        <div class="form-group mt-2">
                           <label for="Email">Email </label>
                           <input type="email" class="form-control" id="Email" name="Email_Address" placeholder="Enter Email address" required="required">
                        </div>
                        <div class="form-group mt-2">
                            <label for="Password">Password</label>
                           <input type="password" class="form-control" id="Passwords" name="Passwords" placeholder="Enter Password" required="required">
                        </div> 
                           
                        <div class="form-group mt-2">
                           <label for="Phone Number">Phone Number</label>
                           <input type="text" class="form-control" id="Phone_Number" name="Phone_Number" placeholder="Enter Phone Number" required="required"
                           maxLength="11" minLength="11">  
                        </div>
                        <div class="form-group mt-2">
                           <label for="Phone Number">Series</label>
                           <input disabled type="text" class="form-control" id="Series" name="Series" placeholder="Series" required="required"
                           maxLength="2" minLength="2">  
                        </div>
                        <div class="form-group mt-2">
                           <label for="Section">Section </label>
                           <select name = "Section" id = "Section" style="color:black;text-decoration:none; background-color: gray">
                           </select>
                             </div>
                         <div class="form-group text-center mt-3">
                            <a href="index.php"><button type="button" name="Back" class="btn btn-success btn-block" >Back</button></a>
                           <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
                           </div>
                           
                             <p>Already Registered? <a href="Students_Login.php" style="color:coral;text-decoration:none;">Login here</a></p>
                           </div>
                    </form>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>

    </div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <script src="js/student_reg.js"></script>
</body>
</html>