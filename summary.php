<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/head_section.inc.php') ?>
<?php  include(ROOT_PATH . '/admin/includes/public_functions.php'); ?>

<?php 
	// Get all admin users from DB
	$number_of_applications = applicationCount();
  $number_of_users = userCount();
  $applicationPercentage = applicationPercentage();
  $maleCount = maleCount();
  $femaleCount = femaleCount();
?>

<style>
  .bg-primary,.btn-primary{
    background-color: #0d47a1 !important;
  }
  .container{
    height: 90vh;
    padding: 15% 0;
  }
</style>
  <body>


  <?php require_once( ROOT_PATH . '/includes/navbar.inc.php') ?>
    
  <div class="container text-center">
        <div class="row">
            <div class="col-2">
                <img src="img/Coat_of_arms_of_Kenya_(Official).svg.png" height="70" alt="">
            </div>
            <div class="col-10">
                <h1>KENYA BURSARY APPLICATION PLATFORM</h1>
            </div>
      </div>

      <table class="table table-striped">
          <thead>
              <tr>
                  <th>Status</th>
                    <th>Details</th>
              </tr>
              <tr>
                  <td>Applications</td>
                  <td><?php echo $number_of_applications ?> </td>
                  
              </tr>

              <tr>
                  <td>Remaining</td>
                  <td><?php echo 100 - $number_of_applications ?> </td>
                  
              </tr>
              <tr>
                  <td>Fill Rate</td>
                  <td> <?php echo $applicationPercentage ?> %</td>
                  
              </tr>
              <tr>
                  <td>Gender Distribution</td>
                  <td> Male - <?php echo $maleCount ; ?> <br> Women - <?php echo $femaleCount ; ?></td>
                  
              </tr>
              <tr>
                  <td>Approved</td>
                  <td> <?php echo $applicationPercentage ?> </td>
                  
              </tr>
          </thead>
      </table>
    </div>

  </body>
</html>