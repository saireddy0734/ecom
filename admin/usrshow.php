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
       User details
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-9">


       <?php 
        include('../partials/connect.php');
        
        $id = $_GET['usr_id'];
        $sql="SELECT * from customers WHERE id='$id'";

        $results=$connect->query($sql);

        $final=$results->fetch_assoc();        
        

        ?>

        <h3> User Name : <?php echo $final['username']?> </h3><hr><br>

        <h3> Password : <?php echo $final['password']?> </h3><hr><br>

        <h3> Account created at : <?php echo $final['created_at']?> </h3><hr><br>
       
       <h3>
        <a href="usersshow.php">
           <button>Back</button>
        </a>
        </h3>

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
