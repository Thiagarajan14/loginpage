<?php
sleep(1);
include('db.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];

$sql="insert into userdetails(name,email,password,number) values('$name','$email','$password','$number')";
$stmt=$con->prepare($sql);
$stmt->execute();
?>