<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/head_section.inc.php') ?>
<style>
  .bg-primary,.btn-primary{
    background-color: #0d47a1 !important;
  }
  .container{
    height: 80vh;
    padding: 5% 0;
  }
</style>
  <body>


  <?php require_once( ROOT_PATH . '/includes/navbar.inc.php') ?>
    <div class="container text-center">
      <h1>KENYA BURSARY APPLICATION PLATFORM</h1>
      <img src="img/Coat_of_arms_of_Kenya_(Official).svg.png" height="120" alt="">
      <div class="row">
        <div class="col-12 m-2">
          <a href="index2.php" type="button" class="btn btn-primary btn-lg btn-block">Bursary Application</a>
        </div>
        <div class="col-12 m-2">
          <a href="summary.php" type="button" class="btn btn-primary btn-lg btn-block">Statistic Summary Report</a>
        </div>
        <!-- <div class="col-12 m-2">
          <a href="admin/index.php" type="button" class="btn btn-primary btn-lg btn-block">Admin</a>
        </div> -->
      </div>
    </div>

  </body>
</html>
        