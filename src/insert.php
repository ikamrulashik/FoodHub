<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];

if(!empty($username) || !empty($email) || !empty($password) || !empty($gender)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="foodhub";

	$conn=new mysqli($host, $dbUsername, $dbUsername, $name);

	if (mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else {
		$SELECT ="SELECT email From signup Where email = ? Limit 1";
		$INSERT = "INSERT Into signup (username, email, password, gender) values(?,?,?,?)";

		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result(&email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssii", $username, $email, $password, $gender);
			$stmt->execute();
			echo "New record insertly succesfully";
		}
		else {
			"Someone already register using this email";
		}
		$stmt->close();
		$conn->close();
	}
}
else{
	echo "All field are required";
	die();
}
