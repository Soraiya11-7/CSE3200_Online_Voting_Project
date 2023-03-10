<?php
  $roll = $_GET['roll'];

  require('conn.php');      
  $croll = $_COOKIE['_roll'];
  $cpass = $_COOKIE['_pass'];

  $sql ="SELECT * FROM students_info where Roll='$croll'";

  $query = mysqli_query($conn,$sql);   
  $res = mysqli_fetch_array($query);

  if (password_verify($cpass, $res['Passwords'])) {
    $sql ="SELECT * FROM candidate_voter_rel where vid='$croll'";
    $query = mysqli_query($conn,$sql);   
    if (mysqli_num_rows($query) > 0) {
      die('You have already voted for a candidate');
    }

    $sql1 = "SELECT Total_Vote FROM candidate_list where Roll='".$roll."'";
    $query = mysqli_query($conn,$sql1);    
    $res = mysqli_fetch_array($query);
    $vote = $res['Total_Vote']+1;
    $sql = 'UPDATE candidate_list SET Total_Vote="'.$vote.'" WHERE Roll="'.$roll.'"';
    mysqli_query($conn, $sql);

    $sql = 'INSERT INTO candidate_voter_rel VALUES('.$roll.', '.$croll.')';
    mysqli_query($conn, $sql);

    header('location: Voter_Panel.php');
  }
?>