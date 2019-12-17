<?php
    require_once("connection.php");

    if (isset($_POST['submit'])) {
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $gender = $_REQUEST['gender'];

        $sql="INSERT into user('$username', '$email', '$password', '$gender');";

        if (mysqli_query($conn, $sql)){
            echo "signed up";
        }         
    }
?>
