<?php
include('../partials/connect.php');
$newid=$_GET['usrdel_id'];

$sql="Delete from customers where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: usersshow.php');
}else{
	echo "Not Deleted";
}

?>