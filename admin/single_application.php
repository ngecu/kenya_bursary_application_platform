<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/public_functions.php'); ?>

<?php 
if (!isset($_SESSION['user'])) {
  echo '<script>window.location = "http://localhost/bena2/login_sign_up.php";</script>';
}
?>

<?php 

if (isset($_GET['application'])) {

  $application_id = $_GET['application'];

  $application_ind = getApplication($application_id);
  $application_personal_details = getApplicationPersnalDetails($application_id);
  $application_family = getApplicationFamilyBackground($application_id);
  $application_additional = getApplicationAdditionalInfo($application_id);
  $application_educating_funding_history = getApplicationEducatingFundingHistory($application_id);
  $application_guardian_declaration = getApplicationGuardianDeclaration($application_id);
  $application_key_attachment = getApplicationKeyAttachment($application_id);
  # code...
}


?>
<!DOCTYPE html>
<html>
    <head>
      <script src="https://kit.fontawesome.com/0cc3d8b950.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>KENYA BURSARY APPLICATION PLATFORM</title>
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}
#regForm {
    /* background-color: #ffffff; */
    /* background-color: #f1f1f1; */

    /* border: solid #ffffff; */
    box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
    max-height: 95vh;
    overflow: auto;
    -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none; 
  
  }

  #regForm::-webkit-scrollbar {
  display: none;
}

  #regForm:after{
  content: 'NATIONAL GOVERNMENT CONSTITUENCY DEVELOPMENT FUND BURSARY APPLICATION FORM FOR STUDENTS IN SECONDARY SCHOOLS, COLLEGES AND UNIVERSITIES';
  position: fixed;
  top: 0;
  bottom: 0;
  left: 20%;
  right: 0;
  z-index: -1;
  text-align: center;
  
  color: #0d745e;
  font-size: 50px;
  font-weight: 500px;
  display: grid;
  justify-content: center;
  align-content: center;
  opacity: 0.1;
  max-width: 60vw;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}



button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>
<body>

  <div id="regForm">  
  <img src="../img/Coat_of_arms_of_Kenya_(Official).svg.png" alt="" style="position: relative;left: 40%;width: 10vw;height: 200px;">
  <h1>NATIONAL GOVERNMENT CONSTITUENCY DEVELOPMENT FUND BURSARY APPLICATION FORM FOR STUDENTS IN SECONDARY SCHOOLS, COLLEGES AND UNIVERSITIES :</h1>
  <!-- <h1><?php echo $application_id ?></h1> -->
  <!-- One "tab" for each step in the form: -->
 <b>SERIAL NO:NGCDF/ </b> <span class="text-danger">  <?php  echo $application_ind['serial_number'] ?> </span>


 <h2 style="text-decoration: underline;">PART A: TO BE FILLED BY APPLICANT/PARENT/GUARDIAN</h2>
 <ol>
   <li>
    <strong><h3 style="text-decoration: underline;">Personal, institutional and others details</h3></strong>
   </li>


 <table class="table table-bordered">
    <tr>
      <td>Full name of student </td>
      <td><?php echo $application_personal_details['full_name'] ?> </td>
    </tr>

    <tr>
      <td>Gender </td>
      <td><?php echo $application_personal_details['gender'] ?> </td>
    </tr>

    <tr>
      <td>Date Of Birth </td>
      <td><?php echo $application_personal_details['dob'] ?> </td>
    </tr>

    <tr>
      <td>ID Number/Passport No </td>
      <td><?php echo $application_personal_details['dob'] ?> </td>
    </tr>

    <tr>
      <td>Name of school/College/University </td>
      <td><?php echo $application_personal_details['school'] ?> </td>
    </tr>

    <tr>
      <td>Adm. No/Reg. No. </td>
      <td><?php echo $application_personal_details['reg_no'] ?> </td>
    </tr>

    <tr>
      <td>Campus/Branch(For Tertiary institution and University). </td>
      <td><?php echo $application_personal_details['campus'] ?> </td>
    </tr>

    <tr>
      <td>Faculty/Department </td>
      <td><?php echo $application_personal_details['department'] ?> </td>
    </tr>

    <tr>
      <td>Course Of Study </td>
      <td><?php echo $application_personal_details['course'] ?> </td>

    </tr>

    <tr>
      <td>Mode Of Study </td>
      <td><?php echo $application_personal_details['mode_of_study'] ?> </td>
      
    </tr>

    <tr>
      <td>Class(Grade)/Year of Study </td>
      <td><?php echo $application_personal_details['year_of_study'] ?> </td>
      
    </tr>

    <tr>
      <td>Academic Year/Semester/Term </td>
      <td><?php echo $application_personal_details['year_of_study'] ?> </td>
      
    </tr>

    <tr>
      <td>Course Duration(Years) </td>
      <td><?php echo $application_personal_details['course_duration'] ?> </td>
      
    </tr>

    <tr>
      <td>Expected Year and Month of Completion </td>
      <td><?php echo $application_personal_details['expected_year_and_month_of_completion'] ?> </td>
      
    </tr>
    <tr>
      <td>Mobile No./Tel No. </td>
      <td><?php echo $application_personal_details['tel'] ?> </td>
      
    </tr>
    <tr>
      <td>Physical Address </td>
      <td><?php echo $application_personal_details['physical_address'] ?> </td>
      
    </tr>

    <tr>
      <td>Location </td>
      <td><?php echo $application_personal_details['location'] ?> </td>
      
    </tr>

    <tr>
      <td>Sub-Location </td>
      <td><?php echo $application_personal_details['sub_location'] ?> </td>
      
    </tr>

    <tr>
      <td>Ward </td>
      <td><?php echo $application_personal_details['ward'] ?> </td> 
    </tr>

    <tr>
      <td>institution's Postal Adress </td>
      <td><?php echo $application_personal_details['institution_postal_address'] ?> </td> 
    </tr>

    <tr>
      <td>institution's Tell No </td>
      <td><?php echo $application_personal_details['institution_tel'] ?> </td> 
    </tr>

    <tr>
      <td>Amount Applied For(Kshs) </td>
      <td><?php echo $application_personal_details['amount_applied_for'] ?> </td> 
    </tr>

</table>

<strong>
Where applicable, please attach the relevant Supportive documents including the following
(Letter of admission, fees structure and recommendation letter)</strong>

<li>
  <strong><h3 style="text-decoration: underline;"></h3>FAMILY BACKGROUND (Tick where applicable)</h3></strong>
  </li>
<table class="table table-bordered">

  <tr>
    <td>Total Orphan </td>
    <td><?php echo $application_personal_details['total_orphan'] ?> </td> 
  </tr>

  <tr>
    <td>Partial Orphan </td>
    <td><?php echo $application_personal_details['partial_ophan'] ?> </td> 
  </tr>

  <tr>
    <td>Single Parent </td>
    <td><?php echo $application_personal_details['single_parent'] ?> </td> 
  </tr>

  <tr>
    <td> Both Parent's Alive </td>
    <td><?php echo $application_personal_details['both_parents_alive'] ?> </td> 
  </tr>

  <tr>
    <td> Number of Siblings(alive) </td>
    <td><?php echo $application_personal_details['alive_siblings'] ?> </td> 
  </tr>

  <tr>
    <td> Estimated family Income </td>
    <td><?php echo $application_personal_details['family_income'] ?> </td> 
  </tr>

  <tr>
    <td> Estimated family expenses </td>
    <td><?php echo $application_personal_details['family_expenses'] ?> </td> 
  </tr>
</table>

<strong>Attached photocopies of death Certificate(s) and verification letters from area
  chief/assistant chief (where applicable)</strong>

<ul>
  <li style="text-decoration: underline;">
    Father/Mother/Guardian
  </li>

  <div class="row">
    <div class="col-6">
      Name <strong style="text-decoration: underline;"> Robinson Ngecu</strong>
    </div>
    <div class="col-6">
      Address <strong> Muranga</strong>
    </div>
    <div class="col-6">
      Tel <strong style="text-decoration: underline;"> +254707583092</strong>
    </div>
    <div class="col-6">
      Occupation <strong> Student</strong>
    </div>
    <div class="col-6">
      Type of Employment <strong> Permanent</strong>
    </div>
    <div class="col-6">
      Main source of income <strong> Farming</strong>
    </div>
  </div>
</ul>


<li>
  <strong><h3 style="text-decoration: underline;"></h3>APPLICANTS ADDITTIONAL INFORMARTION</h3></strong>
  </li>

<ul>
  <li>
    Have you received any financial support/bursary from NG-CDF in the past? Yes(<i class="fa-solid fa-check"></i>) No()
  </li>
  If yes, specify how much and when you last received the support <strong><?php echo $application_additional['more_bursary_history'] ?></strong>

  <li>
    Have you received any financial support/bursaries from any other organization in the past? Please provide details  <strong> <?php echo $application_additional['financial_og_history'] ?></strong>
  </li>
  <li>
    Do you suffer from any physical impairment (disability)? Yes(<i class="fa-solid fa-check"></i>) No()
  </li>
  <li>
    Does any of your parents/guardians have any form of disability? Yes(<i class="fa-solid fa-check"></i>) No()
    
  </li>
  If yes, describe the disability <strong> <?php echo $application_additional['parent_disability_description'] ?>  </strong>

  
  
</ul>

<li>
  <strong><h3 style="text-decoration: underline;"></h3>EDUCATION FUNDING HISTORY</h3></strong>
  </li>

  <ul>
    <li>
      State the main source of funding for your education in the past (Fill where applicable)
    </li>
    <div class="row">
      <div class="col-6"> In secondary school </div> <div class="col-6"><?php echo $application_educating_funding_history['secondary_main_funding'] ?> </div>

      <div class="col-6"> In college </div> <div class="col-6"> <?php echo $application_educating_funding_history['college_main_funding'] ?>  </div>

      <div class="col-6"> In university </div> <div class="col-6"> <?php echo $application_educating_funding_history['university_main_funding'] ?>  </div>

    </div>
    <li>
      Indicate other sources of funding if any
    </li>

    <div class="row">
      <div class="col-6"> In secondary school  </div> <div class="col-6"> <?php echo $application_educating_funding_history['secondary_other_funding'] ?> </div>

      <div class="col-6"> In college </div> <div class="col-6"> <?php echo $application_educating_funding_history['college_other_funding'] ?>  </div>

      <div class="col-6"> In university </div> <div class="col-6"> <?php echo $application_educating_funding_history['university_other_funding'] ?>  </div>
      
    </div>
    
  </ul>

</ol>

<h2 style="text-decoration: underline;">PART B: APPLICANTS ACADEMIC PERFORMANCE</h2>

  <ul>
    <li>What is your average academic performance? <?php echo $application_educating_funding_history['average_academic_performance'] ?></li>
    <li>Have you been sent away from school?  <?php echo $application_educating_funding_history['suspension_status'] ?></li>
    <li>If yes provide reasons for the absence <?php echo $application_educating_funding_history['why_suspension_status'] ?></li>
    <li>Specify number of weeks you stayed away from school <?php echo $application_educating_funding_history['suspension_duration'] ?></li>
    <li>Annual fees (As per fee structure) Kshs  <?php echo $application_educating_funding_history['anual_fees'] ?></li>
    <li> Last semester`s/ term fee balance <?php echo $application_educating_funding_history['last_fee_balance'] ?></li>
    <li>This semester`s/ term fee balance<?php echo $application_educating_funding_history['this_fee_balance'] ?></li>
    <li>Next semester`s/ term fee balance<?php echo $application_educating_funding_history['next_fee_balance'] ?></li>
    <li>Loan from HELB (where applicable) <?php echo $application_educating_funding_history['HELB_loan'] ?></li>
</ul>


<h2 style="text-decoration: underline;">REFEREES</h2>

      <p>The student/parent/guardian should provide the names and telephone contacts of at least
        two referees who know the family well.</p>

        <div class="row">
          <div class="col-12">
            Name  <?php echo $application_guardian_declaration['referee1_name'] ?>
          </div>
          <div class="col-6">
            Address  <?php echo $application_guardian_declaration['referee1_address'] ?>
          </div>
          <div class="col-6">
            Telephone  <?php echo $application_guardian_declaration['referee1_tel'] ?>
          </div>

          <div class="col-12">
            Name  <?php echo $application_guardian_declaration['referee2_name'] ?>
          </div>
          <div class="col-6">
            Address  <?php echo $application_guardian_declaration['referee2_address'] ?>
          </div>
          <div class="col-6">
            Telephone  <?php echo $application_guardian_declaration['referee2_tel'] ?>
          </div>

        </div>


        <h2 style="text-decoration: underline;">STUDENT’S/PARENT’S/GUARDIAN’S DECLARATION</h2>

      <p>I hereby declare that the information provided herein is true to the best of my knowledge
        and belief, and I understand that any false information provided shall lead to my automatic
        disqualification by the committee.</p>

        <div class="row">
          <div class="col-6">
            Applicant’s Full Name
          </div>
          <div class="col-6">
            <?php echo $application_guardian_declaration['declare1_full_name'] ?>
          </div>
          <div class="col-6">
            Date
          </div>
          <div class="col-6">
            <?php echo $application_guardian_declaration['declaration1_date'] ?>
          </div>
        </div>
 
<p>I hereby declare that the information provided herein is true to the best of my knowledge
        and belief, and I understand that any false information provided shall lead to my automatic
        disqualification by the committee.</p>

        <div class="row">
          <div class="col-6">
            Applicant’s Full Name
          </div>
          <div class="col-6">
            <?php echo $application_guardian_declaration['declare2_full_name'] ?>
          </div>
          <div class="col-6">
            Date
          </div>
          <div class="col-6">
            <?php echo $application_guardian_declaration['declaration2_date'] ?>
          </div>
        </div>
           
        <h2 style="text-decoration: underline;">FOR OFFICIAL USE ONLY</h2>

        <div class="row">
          <div class="col-6">
            The forms was duly filled and signed
          </div>
          <div class="col-6">
            Yes ( )  No ( )
          </div>
          <div class="col-6">
            All supportive documents have been attached
          </div>
          <div class="col-6">
            Yes ( )  No ( )
          </div>
          <div class="col-12">
            Recommended for approval ( )
          </div>
          <div class="col-12">
            Not Recommended for Approval ( )
          </div>
          <div class="col-12">
            Reason for non-approval
          </div>
        </div>

        <h2 style="text-decoration: underline;">KEY ATTACHMENT TO THE FORM</h2>
        <p>Applicants MUST attach copies of relevant documents including the following;</p>

        <table class="table table-bordered thead-dark"> 
          <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Document</th>
          </tr>
          </thead>
          <tbody>
            <tr>
            <td>1</td>
            <td>Students’ Transcript/Report Form</td>
            <td> <img src="../uploads/transcript_form/62993448e9581-1654207560.png" width="200" alt=""> </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Photocopy of parent/Guardian National ID Card</td>
            <td> <img src="../uploads/transcript_form/62993448e9581-1654207560.png" width="200" alt=""> </td>
          </tr>

          <tr>
            <td>3</td>
            <td>Photocopy of student’s national ID card (Mandatory for post-secondary School
              students)</td>
            <td> <img src="../uploads/transcript_form/62993448e9581-1654207560.png" width="200" alt=""> </td>
          </tr>


          <tr>
            <td>4</td>
            <td>Photocopy of Birth certificate</td>
            <td> <img src="../uploads/transcript_form/62993448e9581-1654207560.png" width="200" alt=""> </td>
          </tr>

          <tr>
            <td>5</td>
            <td>Photocopy of secondary/College/University ID Card</td>
            <td> <img src="../uploads/transcript_form/62993448e9581-1654207560.png" width="200" alt=""> </td>
          </tr>

          <tr>
            <td>6</td>
            <td>Parent(s) Death certificate or Burial permit (For Orphans)</td>
            <td> <img src="../uploads/transcript_form/62993448e9581-1654207560.png" width="200" alt=""> </td>
          </tr>


          <tr>
            <td>7</td>
            <td>Current fees structure (Compulsory for all applicants)</td>
            <td> <img src="../uploads/transcript_form/62993448e9581-1654207560.png" width="200" alt=""> </td>
          </tr>


          <tr>
            <td>8</td>
            <td>School/ institution Admission letters (Compulsory for Colleges/university students)</td>
            <td> <img src="../uploads/transcript_form/62993448e9581-1654207560.png" width="200" alt=""> </td>
          </tr>


          <tr>
            <td>9</td>
            <td>Any other relevant supportive documents</td>
            <td> <img src="../uploads/transcript_form/62993448e9581-1654207560.png" width="200" alt=""> </td>
          </tr>
          </tbody>
        </table>
     

</div>
    </div>


  </div>
</body>
</html>
