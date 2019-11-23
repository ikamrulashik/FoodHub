/*database connection start*/
<?php
$servername="localhost";
$username="root";
$dbname="phpcode_demos";//database name
$conn=mysql_connect($servername, $username, $password, $dbname) or die("connection failed: " . mysql_connect_error());
if (mysqli_connect_errno()){
	printf("Connect failed: %s\n", mysql_connect_error());
	exit();
}
?>