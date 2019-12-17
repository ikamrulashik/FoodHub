<?php
    require_once("connection.php");

    if (isset($_POST['submit'])) {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $sql="SELECT * from user where email='$email' and jobname='$password'";

        if ($conn-> query($sql)) {
            echo "Login successfully";
        }
    }
?>
