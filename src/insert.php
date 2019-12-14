<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];

//database connection

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}
else{
	$stmt = $sonn->prepare("insert into signup(name, email, password, gender)
	values(?, ?, ?, ?)")
	$stmt->bind_param("ssss", $name, $email, $password, $gender);
	$stmt->execute();
	echo "registration successfully...";
	$stmt->close();
	$conn->close();
}
?>