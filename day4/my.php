<?php
$conn=mysqli_connect(hostname:"localhost",username:"root",password: "",database: "login");
$sql="SELECT * FROM `login_details`";
$result=mysqli_query(mysql: $conn,query: $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Data from Database</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">EMAILS</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
  <?php
if(mysqli_num_rows(result: $result)>0){
    while($data=mysqli_fetch_assoc(result: $result)){

        ?>

    <tr>
      <th scope="row"><?php echo $data["id"];?></th>
      <td><?php echo $data["email"];?></td>
      <td><?php echo $data["userpassword"];?></td>
      <td><span><a href="update.php?id=<?php echo $data["id"];?>" class="btn btn-success mx-3">Update</a></span><span><a href="delete.php?id=<?php echo $data["id"];?>" class="btn btn-danger mx-3">Delete</a></span></td>
    </tr>
    <?php
    }
}
    ?>

  
  
    
   
  </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>