<?php
    header('Content-type: application/json');

    require('../conn.php');
    $data = json_decode(file_get_contents('php://input'), true);
    $series = $data['series'];
    
    $sql ="SELECT id, section FROM section WHERE series='$series'";

    $result = $conn->query($sql);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    // foreach($options as $option) {
    //     echo $option['section'];
    // }
    echo json_encode($options);
?>