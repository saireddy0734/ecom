<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
<div class="user-panel">
        
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li style="color:orange;" class="header"><h5><?php echo $_SESSION['email'] ?></h5></li> 
        <li class="active treeview">
     <li>
          <a href="adminindex.php">
            <i class="fa fa-th"></i> <span>Home</span>
            
          </a>
        </li>
        <li>
          <a href="categories.php">
            <i class="fa fa-th"></i> <span>Category</span>
            
          </a>
        </li>
         <li>
          <a href="productsshow.php">
            <i class="fa fa-th"></i> <span>Products</span>
            
          </a>
        </li>
        
        <li>
          <a href="usersshow.php">
            <i class="fa fa-th"></i> <span>Users</span>
            
          </a>
        </li>


        <li>
          <a href="contactedusers.php">
            <i class="fa fa-th"></i> <span>Messages</span>
            
          </a>
        </li>



        <li>
          <a href="passwordrequests.php">
            <i class="fa fa-th"></i> <span>Password Requests </span>
            
          </a>
        </li>

        <li>
          <a href="ordersshow.php">
            <i class="fa fa-th"></i> <span>Orders </span>
            
          </a>
        </li>
        
        <li>
          <a href="adminpartials/logout.php">
          <h4>  <i class="fa fa-th"></i> <span style="color:orange; ">Sign Out</h4></span>
            
          </a>
        </li>

       

        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>