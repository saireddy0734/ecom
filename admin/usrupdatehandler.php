<?php

include('../partials/connect.php');

if(isset($_POST['usrupdate'])){

    $newid = $_POST['form_id'];
    $newusrname = $_POST['username'];
    $newpassword= $_POST['password'];

    $sql = "update customers set username='$newusrname  ' , password = '$newpassword' where id='$newid'" ; 

    if (mysqli_query($connect,$sql)) {
        header('location: usersshow.php');
    }else{
        header('location: adminindex.php');
    }

}

?>