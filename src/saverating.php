<?php
Insert into table db_conitem_ratingnect

include_once("db_connect.php");
if(!empty($_POST['rating']) && !empty($_POST['itemId'])){
	$itemId=$_POST['itemid'];
	$userId=1234567;
	$insertRating="INSERT INTO item_rating (itemId, userId, ratingNumber, title, comments, created, modified) VALUES ('".$itemid."', '".$userId."','".$_POST['rating']."','".$_POST['title']."','"$_POST["comment"]."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."')";
	mysql_query($conn, $insertRating) or die("database error: ". mysql_error($conn));
	echo "rating saved!";
}
?>