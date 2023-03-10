<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style11.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Form</title>
    <
</head>
<body>
<div class="container-fluid bg mt-3S">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
                    <form class="form-container" action="Students_Login_sql.php" method="POST" >
                    <div class="form-name text-white text-center  ">
                            <span><h3>Sign In<h3></span>
                        </div>
                        <div class="form-group">
                           <label for="Email" >Email  </label>
                           <input type="email" name="Email_Address" class="form-control" id="Email" placeholder="Enter Your Email" required="required">
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label for="Password">Password</label>
                           <input type="password" name="Passwords" class="form-control" id="Password" placeholder="Password" required="required">
                       
                           </div>
                    
                        <div class="form-group text-center mt-3">
                        <a href="index.php"><button type="button" name="Back" class="btn btn-success btn-block" >Back</button></a>
                           <button type="submit" name="login" class="btn btn-success btn-block " >Login</button>
                        </div>
                        <p>New Student? <a href="Students_Reg.php" style="color:coral;text-decoration:none;">Register here</a></p>
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