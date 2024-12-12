<?php
$conn=mysqli_connect(hostname:"localhost",username:"root",password:"",database:"login");
$id=$_GET["id"];
$sql="DELETE FROM `login_details` WHERE  id=$id ";
$result=mysqli_query($conn,$sql);
if($result){
    header(header:"location:my.php");
}
?>