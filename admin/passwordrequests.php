
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

    Password requests by users
       

      </h1>

      

    </section>



    <!-- Main content -->

    <section class="content">

      <!-- Small boxes (Stat box) -->

      <div class="row">

        <div class="col-sm-9">

          

        </a>


          <?php

          include('../partials/connect.php');

          $sql="Select * from forgotrequest";;

          $results=$connect->query($sql);

          while($final=$results->fetch_assoc()){ ?>

            <a href="passwordrequestshow.php?req_id=<?php echo $final['id']?>">
             <h3>User Name : <?php echo $final['uname']?></h3><br>
            </a>

            <a href="passwordrequestshow.php?req_id=<?php echo $final['id']?>">
            <button>Show</button>
            </a>

           <hr>

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