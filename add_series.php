<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style11.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add new series</title>
    
</head>
<body>
<div class="container-fluid bg mt-3S">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
                    <form class="form-container" action="add_series_sql.php" method="POST">
                    <div class="form-name text-dark text-center  ">
                            <span><h3>Add New Series<h3></span>
                        </div>
                        <div class="form-group mt-2">
                           <label for="Section" >Section</label>
                           <input type="text" class="form-control" id="Section" name="Section" placeholder="Enter Section Name" required="required">
                        </div>
                        <div class="form-group">
                           <label for="Series" >Series</label>
                           <input type="text" class="form-control" id="Series" name="Series" placeholder="Enter Series Number" required="required"
                           maxLength="2" minLength="2">
                        </div>
                        
                        <div class="form-group text-center mt-3">
                            <a href="Admin_Panel.php"><button type="button" name="Back" class="btn btn-success btn-block" >Back</button></a>
                            <button type="submit" name="login" class="btn btn-success btn-block ">Assign</button>
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
</body>
</html>