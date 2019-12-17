<?php
    require_once("/connection.php");

    function getRating($id) {
        
        $sql="SELECT AVG(rating) as result FROM resturant_rating WHERE resturant_id = '$id';";

        if ($result = $conn->query($sql){
            echo "$result";
        }
    }

    if (isset($_POST['submit'])) {.
        $id = $_REQUEST['email'];
        $user_id = $_REQUEST['password'];
        $opinion = $_REQUEST['gender'];

        $sql="INSERT INTO `resturant_rating` (`resturant_id`, `user_id`, `rating`)
        VALUES ('$id', '$user_id', '$opinion');";


        if ($conn -> query($sql){
            echo "$result";
            // Free result set
            mysqli_free_result($result);
        }      
    }
    
?>