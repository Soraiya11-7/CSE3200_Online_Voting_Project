<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Document</title>
   
</head>
<body class="container">
<div >
<div style="margin-top:30px;">
     <a style="text-align:left;margin-left:50px;" class='btn btn-success btn-sm mt-3 ' href='Admin_Panel.php?'>Back</a>
</div>
    <h1 style="margin:20px; text-align:center; padding:50px,20px">Advisor Details</h1><br>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Email Address</th>
          <th>Seies</th>
          <th>Section</th>
          <th>Action</th>
        </tr> 
      </thead> 
      
      <tbody>
      <?php
      require('conn.php');
       $sql ="SELECT advisor.id,advisor.fullname, advisor.email, section.Series, section.Section 
                      FROM (advisor JOIN advisor_section_rel ON advisor.id=advisor_section_rel.id) 
                       JOIN section ON advisor_section_rel.section_id = section.id";
       $query = mysqli_query($conn,$sql);  
        if( $query){
        while($data = mysqli_fetch_assoc($query )){
        //$disabled = $data['is_advisor'] == '1' ? 'disabled' : '';
        echo "<tr>
          
          <td>" .$data["id"] ."</td>
          <td>" .$data["fullname"] ."</td>
          <td>" .$data["email"] ."</td>
          <td>" .$data["Series"] ."</td>
          <td>" .$data["Section"] ."</td>
          <td>
          <a class='btn btn-primary btn-sm' href='Edit_adv.php?id=$data[id]'>Edit</a>
          <a class='btn btn-danger btn-sm' href='Delete_adv.php?id=$data[id]'>Delete</a>
          </td>
        </tr>";
        }
      }


        ?>

      </tbody> 
  </table> 
<div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>
