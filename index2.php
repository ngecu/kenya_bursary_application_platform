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


<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>KENYA BURSARY APPLICATION PLATFORM</title>
  </head>
<style>
  body{
    overflow:hidden;
  }
  .bg-primary,.btn-primary{
    background-color: #0d47a1 !important;
  }
  .container{
    
    padding: 15% 0;
  }

</style>
  <body class="bg-light">
  <?php require_once( ROOT_PATH . '/includes/navbar.inc.php') ?>



<div class="row" style="height: 100%;
padding:5% 10%;">
    <div class="col-4 m-4 ">
        <div class="row">
            <div class="col-12 card  border" style="padding: 10%;">
                <div class="row">
                  <!-- <div class="col-4">
                    <label for="">County</label>
                    <select name="" id="">
                      <option value="">Mombasa</option>
                    </select>
                  </div>
                  <div class="col-4">
                    <label for="">Constituency</label>
                    <select name="" id="">
                      <option value="">Mombasa</option>

                    </select>
                  </div>
               
                  <div class="col-4">
                    <label for="">Ward</label>
                    <select name="" id="">
                      <option value="">Mombasa</option>

                    </select>
                  </div> -->

                <div class="col-12">
                    <b>Total of Applications</b>
                </div>
                <div class="col-6">
                    <b>100</b>
                    <br>
                    Available
                </div>
                <div class="col-6">
                    <b><?php echo $number_of_applications ?></b>
                    <br>
                    Applied
                </div>
            </div>
        </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 card  border" style="padding: 10%;">
              <table>
                <tr>
                  <td>
                  Remaining 
                    
                  </td>
                  <td>
                  <b><?php echo 100 - $number_of_applications ?></b>
                  </td>
                  </tr>
                  <tr>
                  <td>
                  Fill Rate 
                  <td>
                  <b><?php echo $applicationPercentage ?> %</b>

                  </td>
                  </td>
                </tr>
                <tr>
                  <td>
                  Approved 
                  </td>
                  <td>
                    <b><?php echo $applicationPercentage ?></b>
                  </td>
                </tr>
                <tr>
                  <td>Gender Distribution</td>
                  <td> <b> Male - <?php echo $maleCount ; ?> <br> Women - <?php echo $femaleCount ; ?> </b> </td>
                  
              </tr>
              </table>
                <!-- <div class="row">

               
                <div class="col-12">
                    <b>Location Information</b>
                </div>
                <div class="col-6">
                    County
                    <br>
                    <b>021 MURANG'A</b>
                </div>
                <div class="col-6">
                    Constituency
                    <br>
                    <b>106 KIHARU</b>
                </div>

                <div class="col-6">
                  <b>20658</b>
                  <br>
                  Available
              </div>
              <div class="col-6">
                  <b>500</b>
                  <br>
                  Applied
              </div>

              <div class="col-6">
                <b>20658</b>
                <br>
                Available
            </div>
            <div class="col-6">
                <b>500</b>
                <br>
                Applied
            </div>
            </div> -->
        </div>
        </div>
       
    </div>
    <div class="col-6 m-4 card text-center " style="padding: 4%;">
        <img src="img/Coat_of_arms_of_Kenya_(Official).svg.png" style="height: 10vh;width: 5vw; position: relative;
        left: 45%;" alt="">
        <strong>
          Bursary Application by Soft Copy Or Hard Copy:
         
        </strong>
       
       Choose one of the following:
       Soft Copy is FIlling Online on the website
       Hard Copy is filling manually papers after printing


       <?php 
if (isset($_SESSION['user'])) {
  ?>

<div class="row">
           <div class="col-12 m-2">
            <a href="final.php" type="button" class="btn btn-primary btn-lg btn-block">Soft Copy</a>
           </div>
           <div class="col-12 m-2">
            <a href="Eldas-Bursary-Application-Form-2020-2021.pdf" type="button" class="btn  btn-lg btn-block" download>Hard Copy</a>
           </div>
       </div>

  <?php
} else {
?>


       <div class="row">
           
           <div class="col-12 m-2 alert alert-warning alert-dismissible fade show" role="alert">
           <h4 class="alert-heading">Access Denied!</h4>
           <p>Thank you for taking your time and visiting this page.But you cannot proceed this point.</p>
  <hr>
  <p class="mb-0">You need to register and <strong> login with us </strong></p>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
           </div>
       
       </div>
<?php } ?>
    </div>
</div>

  </body>
</html>
        