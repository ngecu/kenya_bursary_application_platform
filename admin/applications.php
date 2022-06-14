<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/public_functions.php'); ?>

<?php 
if (!isset($_SESSION['user'])) {
  echo '<script>window.location = "http://localhost/bena2/login_sign_up.php";</script>';
}
?>

<?php 
	// Get all admin users from DB
	$applications = getAllApplications();

  if (isset($_GET['delete-application'])) {
    $application_id = $_GET['delete-application'];
    deleteApplication($application_id);
  }

?>



  <?php include(ROOT_PATH . '/admin/includes/head_section.php'); 
  
//   if (!isset($_SESSION['user'])) {
//     echo '<script>window.location = "../login_sign_up.php";</script>';

// } 
  ?>
  <title>Applications</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include(ROOT_PATH . '/admin/includes/aside.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Applications</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Applications</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
         
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with default features</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>Account</th>
                    <th>Applicant</th>
                    <!-- <th>School</th> -->
                    <!-- <th>Region </th>
                    <th>Status </th> -->
                    <th>Date</th>
                    <th></th>
                  </tr>
                  </thead>
               <tbody>
                <?php foreach ($applications as $key => $application): ?>
                 <tr>
                    <td>
                      <?php echo ($key + 1) ?>
                    </td>
                    <td>
                      <?php echo $application['serial_number'] ?>
                    </td>
                    <td>
                      <?php echo getApplicationPersnalDetails($application['ID'])['full_name']; ?> 
                    </td>
                    <!-- <td>
                      <?php echo getApplicationPersnalDetails($application['ID'])['school']; ?>
                    </td> -->
                    <!-- <td>
                      <?php echo getApplicationPersnalDetails($application['ID'])['location']. " ".getApplicationPersnalDetails($application['ID'])['sub_location'] ; ?>
                    </td> -->
                    <td>
                    <?php echo $application['reg_time'] ?>
                    </td>
                    <td class="float-right">
                      <div class="card-buttons">
                      <?php if ($application['approved']  == 0) {
?>                    
                      <a class="btn btn-secondary btn-sm" href="<?php echo BASE_URL . 'admin/single_application.php?approve=' . $application['ID'] ?>">
                      Approve
           </a>

           <?php } else { ?>
            <a class="btn btn-success btn-sm" href="<?php echo BASE_URL . 'admin/single_application.php?disapprove=' . $application['ID'] ?>">
   Disapprove
           </a>

           <?php } ?>
                      <!-- <i class="fas fa-folder">
           </i> -->
        

                          <a class="btn btn-primary btn-sm" href="<?php echo BASE_URL . 'admin/single_application.php?application=' . $application['ID'] ?>">
           <i class="fas fa-folder">
           </i>
           View
           </a>
           
           <!-- <a class="btn btn-info btn-sm" href="<?php echo BASE_URL . 'single_application.php?edit-application='. $application['ID'] ?>">
           <i class="fas fa-pencil-alt">
           </i>
           Edit
           </a> -->
           
           <a class="btn btn-danger btn-sm" href="applications.php?delete-application=<?php echo $application['ID'] ?>">
           <i class="fas fa-trash">
           </i>
           Delete
           </a>
        
             
                   
                         </div>
                 </td>
                 </tr>
                <?php endforeach ?>
               </tbody>
                  <tfoot>
                    <tr>
                    <th></th>
                    <th>Account</th>
                    <th>Applicant</th>
                    <!-- <th>School</th>
                    <th>Region </th>
                    <th>Status </th> -->
                    <th>Date</th>
                    <th></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
