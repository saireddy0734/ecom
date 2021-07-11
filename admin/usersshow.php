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
       Users
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-9">


       <?php 
        include('../partials/connect.php');
        $sql = "select * from customers";
        $results =  $connect->query($sql);
         
        while($final=$results->fetch_assoc()){ ?>
    
          

          <a href="usrshow.php?usr_id=<?php echo $final['id']?>">

          <h3> <?php echo $final['username'] ?> </h3> <br>

          </a>

          <a href="usrshow.php?usr_id=<?php echo $final['id']?>">
           <button>Show</button>
          </a>
          
          <a href="usrupdate.php?usrup_id=<?php echo $final['id'] ?>">
           <button>Update</button>
          </a>

          <a href="usrdelete.php?usrdel_id=<?php echo $final['id'] ?>">
            <button style="color:red">Delete</button>
          </a>

          <hr>

          </a>



           
       <?php }
       ?>


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
