<?php
    require('conn.php');
    $allowed = false;
    if (isset($_GET['id']) && isset($_GET['code'])) {
        $advisor_id = $_GET['id'];
        $code = $_GET['code'];
        $sql = "SELECT * FROM advisor_account_log WHERE advisor_id='$advisor_id' AND otp='$code' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        if (mysqli_num_rows($query) == 1 && $row['is_activated'] == false) {
            $allowed = true;
            $sql2 = "SELECT * FROM advisor WHERE id='$advisor_id' LIMIT 1";
            $row2 = mysqli_fetch_assoc(mysqli_query($conn, $sql2));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style11.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Advisor password set up</title>

</head>

<body>
    <div class="container-fluid bg mt-3S">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <?php
                    if ($allowed) {
                        echo '
                            <form class="form-container" action="activate.php" method="POST">
                            <div class="form-name text-dark text-center  ">
                                <span>
                                    <h3>Setup password<h3>
                                </span>
                            </div>
                            <div class="form-group mt-2">
                                <label for="Name">Full name</label>
                                <input type="text" disabled class="form-control" value="'.$row2['fullname'].'">
                            </div>  
                            <div class="form-group mt-2">
                                <label for="Name">Password</label>
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" required="required">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Name">Retype Password</label>
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password" required="required">
                            </div>
                            <input type="hidden" name="id" value="'.$advisor_id.'">
                            <input type="hidden" name="code" value="'.$code.'">

                            <div class="form-group text-center mt-3">
                                <a href="Admin_Panel.php"><button type="button" name="Back" class="btn btn-success btn-block">Back</button></a>
                                <button type="submit" name="submit" class="btn btn-success btn-block">Continue</button>
                            </div>
        
                        </form>
                        ';
                    } else {
                        echo '<strong>Access denied</strong>';
                    }
                ?>

            </div>

        </div>
    </div>
</body>