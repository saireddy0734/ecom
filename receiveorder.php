<?php


// $host="localhost";
// $user="root";
// $password="";
// $dbname="order";

// $connect=mysqli_connect($host,$user,$password,$dbname);
  
        
//         $customerAddress = $_POST['address'];
//         $cardNumber = $_POST['cardnum'];
//         $expiryNumber = $_POST['expnum'];
//         $cvvNumber = $_POST['cvvnum'];
//         $product_name = $_POST['item_name'];
//         $product_price =$_POST['item_price'];
//         $qty=$_POST['quantity'];
//         $tot = $qty * $product_price;
        
   


//     $sql = "insert into customerorders(adr,cardno ,expno,cvvno,proname,price,quantity,total) values('$customerAddress','$cardNumber','$expiryNumber','$cvvNumber','$product_name,$product_price,$qty,$tot')";
//     $connect->query($sql);
//     echo $customerAddress;echo " ";
//     echo $qty;echo " ";
//     echo $product_name;echo " ";
//     echo $product_price;echo " ";

//     echo " ";
//     echo $tot;

    
include('partials/connect.php');
        
        $customerAddress = $_POST['address'];
        $cardNumber = $_POST['cardnum'];
        $expiryNumber = $_POST['expnum'];
        $cvvNumber = $_POST['cvvnum'];
        $product_name = $_POST['item_name'];
        $product_price =$_POST['item_price'];
        $qty=$_POST['quantity'];
        $tot = $qty * $product_price;  


    $sql = "insert into orderss(address,cardnum,expirynum,cvvnum,product_name,price,qty,tot) values('$customerAddress','$cardNumber','$expiryNumber','$cvvNumber','$product_name','$product_price','$qty','$tot')";
    $connect->query($sql);
 
    
    echo "<script> alert('ORDER IS PLACED');
    window.location.href='index.php';
    </script>";
   
    

    







?>