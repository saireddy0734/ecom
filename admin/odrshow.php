<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
  

  ?>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Order details and address
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-9">


       <?php 
        include('../partials/connect.php');
        
        $id = $_GET['odr_id'];
        $sql="SELECT * from orderss WHERE id='$id'";

        $results=$connect->query($sql);

        $final=$results->fetch_assoc();        
        

        ?>

        <h4> address : <?php echo $final['address']?> </h4> <br>

        <h4> card Number: <?php echo $final['cardnum']?> </h4> <br>

        <h4> Expiry number : <?php echo $final['expirynum']?> </h4> <br>

        <h4> cvv Number: <?php echo $final['cvvnum']?> </h4> <br>

        <h4> Product Name: <?php echo $final['product_name']?> </h4> <br>

        <h4> Price: <?php echo $final['price']?> </h4> <br>

        <h4> Quantity : <?php echo $final['qty']?> </h4> <br>

        <h4> Total : <?php echo $final['tot']?> </h4> <br>

       
       <h4>
        <a href="usersshow.php">
           <button>Back</button>
        </a>
        </h4>

        </div>

       

        
<div class="col-sm-3">
  </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include('adminpartials/footer.php');
 ?>
</body>
</html>
