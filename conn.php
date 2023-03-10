<?php

$Servername = "localhost";
 $UserName = "root";
 $Password = "";
 $dbName = "voting";


$conn = mysqli_connect($Servername,$UserName,$Password,$dbName);
/*
if(!$conn){
    die("Connnection Failed:".mysqli_connect_error());
}
else{
    echo "Connected";
}*/

?>