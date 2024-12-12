<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 Form" >
            <h1 class="text-center">login form</h1>
            <form method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button name="login" type="submit" class="btn btn-primary  text-center">Login</button>
</form>
        </div>
        <div class="col-3"></div>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php 
$conn=mysqli_connect(hostname:"localhost",username:"root",password:"",database:"login");

if(isset($_POST["login"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sqli="INSERT INTO `login_details`( `email`, `userpassword`) VALUES ('$email','$password')";
    $result=mysqli_query(mysql:$conn,query:$sqli);
}
?>