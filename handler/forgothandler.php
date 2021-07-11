<?php
include('../partials/connect.php');
$usrname=$_POST['uname'];
$email = $_POST['email'];

if (!empty($usrname) && !empty($email)) {
	$sql="INSERT INTO forgotrequest(uname, email) VALUES('$usrname','$email')";
	$connect->query($sql);
	echo "<script> alert('Request made to admin. You will receive a new password in email');
			window.location.href='../customerforms.php';
			</script>";
}else{
	echo "<script> alert('Something went wrong');
			window.location.href='../customerforms.php';
			</script>";
}







?>