<aside class="main-sidebar sidebar-dark-primary elevation-4 " style="height:100vh;">
    <!-- Brand Logo -->
    <a href=".\index.php" class="brand-link">
      <img src="..\img\Coat_of_arms_of_Kenya_(Official).svg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KBPA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#"  class="d-block"><?php echo $_SESSION['user']['name'] ?></a>
        </div>
      </div>

  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
         
          </li>
          <li class="nav-item">
            <a href="./users.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./applications.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Applications
                <!-- <i class="fas fa-angle-left right"></i> -->
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
       
          </li>  

            <li class="nav-item">
            <a href="<?php echo BASE_URL.'logout.php'; ?>" class="nav-link alert alert-danger ">
              <!-- <i class="nav-icon fas fa-copy"></i> -->
              <p>
                Logout
                <!-- <i class="fas fa-angle-left right"></i> -->
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
       
          </li>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>