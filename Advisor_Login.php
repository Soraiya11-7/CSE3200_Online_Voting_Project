<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Form</title>
  <style>  *{color:hsl(270, 14%, 97%);}
body{
 background-image: url(Bg.jpg);
 background-repeat: no-repeat;
 background-size: cover;
}
.form-container { border:0px solid #fff ; padding: 50px 80px;
 margin-top: 15vh;
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
                    <form class="form-container" action="Advisor_Login_sql.php" method="POST" >
                    <div class="form-name text-white text-center  ">
                            <span><h3 style="color:green;">Sign In<h3></span>
                        </div>
                        <div class="form-group">
                           <label for="Email" >Email  </label>
                           <input type="email" name="email" class="form-control" id="Email" placeholder="Enter Your Email" required="required">
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label for="Password">Password</label>
                           <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required="required">
                        </div>
                    
                        <div class="form-group text-center mt-3">
                            <a href="index.php"><button type="button" name="Back" class="btn btn-success btn-block" >Back</button></a>
                            <button type="submit" name="login" class="btn btn-success btn-block " >Login</button>
                       
                       
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