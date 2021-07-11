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
        Dashboard
        <small>Control panel</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
        <form role="form" action="usrupdatehandler.php" method="post" enctype="multipart/form-data">

        <?php

          $newid =$_GET['usrup_id'];
          include('../partials/connect.php');

          $sql = "select * from customers where id='$newid'";
          $results = $connect->query($sql);

          $final = $results->fetch_assoc();

        ?>


          <h1>Update username and password here</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">username</label>
                  <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $final['username']?>" name="username">
                </div>
                <div class="form-group">
                  <label for="price">Password</label>
                  <input type="text" class="form-control" id="password" placeholder="Password" value="<?php echo $final['password']?>" name="password">
                </div>
                
                
               
              <!-- /.box-body -->

              <div class="box-footer">
                 <input type="hidden" value="<?php echo $final['id'] ?>" name="form_id" >   
                 <button type="submit" class="btn btn-primary" name="usrupdate">Update</button>
              </div>
            </form>
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
