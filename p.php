<style>
    /* Style the form */
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

/* Style the input fields */
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

/* Hide all steps by default: */
.tab {
  display: none;
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

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>

<form id="regForm" action="">

<h1>NATIONAL GOVERNMENT CONSTITUENCY DEVELOPMENT FUND BURSARY APPLICATION FORM FOR STUDENTS IN SECONDARY SCHOOLS, COLLEGES AND UNIVERSITIES :</h1>
SERIAL NO:NGCDF/ <?php echo $serial_number ?>

  <input type="hidden" name="serial_number" value="<?php echo $serial_number ?>">
  <input type="hidden" name="ip" value="<?php echo $ip ?>">


<!-- One "tab" for each step in the form: -->
<div class="tab">Personal, institutional and others details::
    <div class="row">
    <div class="col s6"> <label> Full name of student : </label> </div>
        <div class="col s6"> <input type="text" name="full_name" value="<?php echo $full_name ?>" id=""> </div>


        <div class="col s6"> <label> Gender: </label> </div>
        <div class="col s6">

          <label>
            <input name="gender" type="radio" value="male" />
            <span>Male</span>
          </label>

          <label>
            <input name="gender" type="radio" value="female" />
            <span>Female</span>
          </label>
        </div>

        <div class="col s6"> <label>Date Of Birth : </label> </div>
        <div class="col s6"> <input type="date" name="dob" id="" value="<?php echo $dob ?>"> </div>

        <div class="col s6"> <label> ID Number/Passport No : </label> </div>
        <div class="col s6"> <input type="number" name="IDNo" id="" value="<?php echo $IDNo ?>"> </div>

        <div class="col s6"> <label> Name of school/College/University </label> </div>
        <div class="col s6"> <input type="text" name="name_of_school" id="" value="<?php echo $name_of_school ?>"> </div>

        <div class="col s6"> <label> Adm. No/Reg. No. </label> </div>
        <div class="col s6"> <input type="text" name="reg_no" id="" value="<?php echo $reg_no ?>"> </div>

        <div class="col s6"> <label> Campus/Branch(For Tertiary institution and University). </label> </div>
        <div class="col s6"> <input type="text" name="campus" id="" value="<?php echo $campus ?>"> </div>


        <div class="col s6"> <label> Faculty/Department </label> </div>
        <div class="col s6"> <input type="text" name="department" id="" value="<?php echo $department ?>"> </div>


        <div class="col s6"> <label> Course Of Study </label> </div>
        <div class="col s6"> <input type="text" name="course_of_study" id="" value="<?php echo $course_of_study ?>"> </div>


        <div class="col s6"> <label> Mode Of Study </label> </div>
        <div class="col s6">

          <label>
            <input name="mode_of_study" type="radio" value="regular" />
            <span>Regular</span>
          </label>

          <label>
            <input name="mode_of_study" type="radio" value="parallel" />
            <span>Parallel</span>
          </label>

          <label>
            <input name="mode_of_study" type="radio" value="boarding" />
            <span>Boarding</span>
          </label>

          <label>
            <input name="mode_of_study" type="radio" value="day" />
            <span>Day</span>
          </label>

        </div>

        <div class="col s6"> <label> Class(Grade)/Year of Study </label> </div>
        <div class="col s6"> <input type="number" name="Class" id="" value="<?php echo $Class ?>"> </div>

        <div class="col s6"> <label> Academic Year/Semester/Term </label> </div>
        <div class="col s6"> <input type="number" name="Academic_year" id="" value="<?php echo $Academic_year ?>"> </div>

        <div class="col s6"> <label> Course Duration(Years) </label> </div>
        <div class="col s6"> <input type="number" name="course_duration" id="" value="<?php echo $course_duration ?>"> </div>

        <div class="col s6"> <label>Expected Year and Month of Completion</label> </div>
        <div class="col s6"> <input type="date" name="expected_year_and_month_of_completion" id="" value="<?php echo $expected_year_and_month_of_completion ?>"> </div>

        <div class="col s6"> <label> Mobile No./Tel No. </label> </div>
        <div class="col s6"> <input type="number" name="tel" id="" value="<?php echo $tel ?>"> </div>

        <div class="col s6"> <label> Physical Address </label> </div>
        <div class="col s6"> <input type="text" name="physical_address" id="" value="<?php echo $physical_address ?>"> </div>

        <div class="col s6"> <label> Permanent Address </label> </div>
        <div class="col s6"> <input type="text" name="permanent_address" id="" value="<?php echo $permanent_address ?>"> </div>

        <div class="col s6"> <label> Location </label> </div>
        <div class="col s6"> <input type="text" name="location" id="" value="<?php echo $location ?>"> </div>

        <div class="col s6"> <label>Sub-Location </label> </div>
        <div class="col s6"> <input type="text" name="sub_location" id="" value="<?php echo $sub_location ?>"> </div>

        <div class="col s6"> <label>Ward </label> </div>
        <div class="col s6"> <input type="text" name="ward" id="" value="<?php echo $ward ?>"> </div>

        <div class="col s6"> <label>institution's Postal Adress </label> </div>
        <div class="col s6"> <input type="text" name="institution_postal_address" id="" value="<?php echo $institution_postal_address ?>"> </div>

        <div class="col s6"> <label>institution's Tell No </label> </div>
        <div class="col s6"> <input type="number" name="institution_tel" id="" value="<?php echo $institution_tel ?>"> </div>

        <div class="col s6"> <label>Amount Applied For(Kshs) </label> </div>
        <div class="col s6"> <input type="number" name="amount_applied_for" id="" value="<?php echo $amount_applied_for ?>"> </div>

    </div>

</div>

<div class="tab">Family Background:
<div class="row">
    
<div class="col s6"> <label> Total Orphan : </label> </div>
<div class="col s6">

  
    <input name="total_orphan" type="radio" value="yes" />
    <span>Yes</span>
  

  
    <input name="total_orphan" type="radio" value="no" />
    <span>No</span>
  
</div>


<div class="col s6"> <label> Partial Orphan : </label> </div>
<div class="col s6">

  <label>
    <input name="partial_ophan" type="radio" value="yes" />
    <span>Yes</span>
  </label>

  <label>
    <input name="partial_ophan" type="radio" value="no" />
    <span>No</span>
  </label>
</div>

<div class="col s6"> <label> Single Parent: </label> </div>
<div class="col s6">

  <label>
    <input name="single_parent" type="radio" value="yes" />
    <span>Yes</span>
  </label>

  <label>
    <input name="single_parent" type="radio" value="no" />
    <span>No</span>
  </label>
</div>

<div class="col s6"> <label> Both Parent's Alive : </label> </div>
<div class="col s6">

  <label>
    <input name="both_parents_alive" type="radio" value="yes" />
    <span>Yes</span>
  </label>

  <label>
    <input name="both_parents_alive" type="radio" value="no" />
    <span>No</span>
  </label>
</div>


<div class="col s6"> <label>Number of Siblings(alive) </label> </div>
<div class="col s6"> <input type="number" name="alive_siblings" value="<?php echo $alive_siblings  ?>" id=""> </div>

<div class="col s6"> <label>Estimated family income
    (Annually) </label> </div>
<div class="col s6"> <input type="number" name="family_income" id="" value="<?php echo $family_income  ?>"> </div>

<div class="col s6"> <label>Estimated family expenses
    (Annually) </label> </div>
<div class="col s6"> <input type="number" name="family_expenses" id="" value="<?php echo $family_expenses ?>"> </div>


<p>Father</p>
<div class="row">
  <div class="col s6">
    <label>Name </label>
    <input type="text" name="fathers_name" id="" value="<?php echo $fathers_name ?>">
  </div>

  <div class="col s6">
    <label>Adress </label>
    <input type="text" name="fathers_address" id="" value="<?php echo $fathers_address ?>">
  </div>

  <div class="col s6">
    <label>Tel No. </label>
    <input type="text" name="fathers_tell" id="" value="<?php echo $fathers_tell ?>">
  </div>


  <div class="col s6">
    <label>Ocupation </label>
    <input type="text" name="fathers_occupation" id="" value="<?php echo $fathers_occupation ?>">
  </div>

  <p>Type of Employment</p>


  <div class="col s12">

    <label>
      <input name="fathers_employment" type="radio" value="permanent"  />
      <span>Permanent</span>
    </label>

    <label>
      <input name="fathers_employment" type="radio" value="contractual" />
      <span>Contractual</span>
    </label>

    <label>
      <input name="fathers_employment" type="radio" value="casual" />
      <span>Casual</span>
    </label>

    <label>
      <input name="fathers_employment" type="radio" value="retired" />
      <span>Retired</span>
    </label>

    <label>
      <input name="fathers_employment" type="radio" value="self_employment" />
      <span>Self-employed</span>
    </label>

    <label>
      <input name="fathers_employment" type="radio" value="none" />
      <span>None</span>
    </label>
  </div>

  <div class="col s6"> <label>Main source of income </label> </div>
  <div class="col s6"> <input type="text" name="fathers_source_of_income" id="" value="<?php echo $fathers_source_of_income ?>" > </div>


</div>


<p>Mother</p>
<div class="row">
  <div class="col s6">
    <label>Name </label>
    <input type="text" name="mothers_name" id="" value="<?php echo $mothers_name ?>">
  </div>

  <div class="col s6">
    <label>Adress </label>
    <input type="text" name="mothers_address" id="" value="<?php echo $mothers_address ?>" >
  </div>

  <div class="col s6">
    <label>Tel No. </label>
    <input type="text" name="mothers_tell" id="" value="<?php echo $mothers_tell ?>">
  </div>


  <div class="col s6">
    <label>Ocupation </label>
    <input type="text" name="mothers_occupation" id="" value="<?php echo $mothers_occupation ?>">
  </div>

  <p>Type of Employment</p>


  <div class="col s12">

    <label>
      <input name="mothers_employment" type="radio" value="permanent" />
      <span>Permanent</span>
    </label>

    <label>
      <input name="mothers_employment" type="radio" value="contractual" />
      <span>Contractual</span>
    </label>

    <label>
      <input name="mothers_employment" type="radio" value="casual" />
      <span>Casual</span>
    </label>

    <label>
      <input name="mothers_employment" type="radio" value="retired" />
      <span>Retired</span>
    </label>

    <label>
      <input name="mothers_employment" type="radio" value="self_employment" />
      <span>Self-employed</span>
    </label>

    <label>
      <input name="mothers_employment" type="radio" value="none" />
      <span>None</span>
    </label>
  </div>



  <div class="col s6"> <label>Main source of income </label> </div>
  <div class="col s6"> <input type="text" name="mothers_source_of_income" id="" value="<?php echo $mothers_source_of_income ?>"> </div>


</div>

<p>Guardian</p>
<div class="row">
  <div class="col s6">
    <label>Name </label>
    <input type="text" name="guardian_name" id="" value="<?php echo $guardian_name ?>">
  </div>

  <div class="col s6">
    <label>Adress </label>
    <input type="text" name="guardian_address" id="" value="<?php echo $guardian_address ?>">
  </div>

  <div class="col s6">
    <label>Tel No. </label>
    <input type="text" name="guardian_tell" id="" value="<?php echo $guardian_tell ?>">
  </div>


  <div class="col s6">
    <label>Ocupation </label>
    <input type="text" name="guardian_occupation" id="" value="<?php echo $guardian_occupation ?>">
  </div>

  <p>Type of Employment</p>


  <div class="col s12">

    <label>
      <input name="guardian_employment" type="radio" value="permanent" />
      <span>Permanent</span>
    </label>

    <label>
      <input name="guardian_employment" type="radio" value="contractual" />
      <span>Contractual</span>
    </label>

    <label>
      <input name="guardian_employment" type="radio" value="casual" />
      <span>Casual</span>
    </label>

    <label>
      <input name="guardian_employment" type="radio" value="retired" />
      <span>Retired</span>
    </label>

    <label>
      <input name="guardian_employment" type="radio" value="self_employment" />
      <span>Self-employed</span>
    </label>

    <label>
      <input name="guardian_employment" type="radio" value="none" />
      <span>None</span>
    </label>
  </div>

  <div class="col s6"> <label>Main source of income </label> </div>
  <div class="col s6"> <input type="text" name="guardian_source_of_income" id="" value="<?php echo $guardian_source_of_income ?>"> </div>

</div>
</div>

<div class="tab">Additional info:
<div class="col s6"> <label>Why are you applying for a bursary? </label> </div>
    <div class="col s6"> <input type="text" name="why_apply" id="" value="<?php echo $why_apply ?>"> </div>

    <div class="col s6">
       <label>Have you received any financial support/bursaries from NG-CDF in the past?</label> 
      </div>
    <div class="col s6">

      <label>
        <input name="bursary_history" type="radio" value="yes" />
        <span>Yes</span>
      </label>

      <label>
        <input name="bursary_history" type="radio" value="no" />
        <span>No</span>
      </label>
    </div>



    <div class="col s6"> <label>If yes, specify how much and when you last received the support</label> </div>
    <div class="col s6"> <input type="text" name="more_bursary_history" id="" value="<?php echo $more_bursary_history ?>"> </div>

    <div class="col s6"> <label>Have you received any financial support/bursaries from any other organization in
        the
        past? Please provide details</label> </div>
    <div class="col s6"> <input type="text" name="financial_og_history" id="" value="<?php echo $financial_og_history ?>"> </div>

    <div class="col s6"> <label>Do you suffer from any physical impairment (disability)? </label> </div>
    <div class="col s6">

      <label>
        <input name="physical_impairment" type="radio" value="yes" />
        <span>Yes</span>
      </label>

      <label>
        <input name="physical_impairment" type="radio" value="no" />
        <span>No</span>
      </label>
    </div>

    <div class="col s6"> <label>Do you have any other disability or any chronic illness? If yes, kindly describe
        and
        provide evidence </label> </div>
    <div class="col s6">

      <label>
        <input name="disability" type="radio"value="yes" />
        <span>Yes</span>
      </label>

      <label>
        <input name="disability" type="radio" value="no" />
        <span>No</span>
      </label>
    </div>
    <div class="col s12">
      <input type="file" name="disability_evidence" id="">
    </div>


    <div class="col s6"> <label>Does any of your parents/guardians have any form of disability? </label> </div>
    <div class="col s6">

      <label>
        <input name="parent_disability" type="radio" value="yes" />
        <span>Yes</span>
      </label>

      
        <input name="parent_disability" type="radio" value="no" />
        <span>No</span>
  
    </div>

    <div class="col s6"> <label>If yes, describe the disability</label> </div>
    <div class="col s6"> <input type="text" name="parent_disability_description" id="" value="<?php echo $parent_disability_description ?>"> </div>


    <div class="col s6"> <label>Does any of your parents/guardians suffer from any other chronic disabling
        medical
        condition? Describe </label> </div>
    <div class="col s6">

  
        <input name="parent_medical_condition" type="radio" value="yes" />
        <span>Yes</span>
     
        <input name="parent_medical_condition" type="radio" value="no" />
        <span>No</span>
     
    </div>

    <div class="col s6"> <label>If yes, describe the disability</label> </div>
    <div class="col s6"> <input type="text" name="parent_medical_condition_description" id="" value="<?php echo $parent_medical_condition_description ?>"> </div>
</div>

<div class="tab">EDUCATION FUNDING HISTORY:
    <p>State the main source of funding for your education in the past (Fill where 
applicable) </p>
<div class="row">
<div class="col s6"> <label>In secondary school </label> </div>
    <div class="col s6"> <input type="text" name="secondary_main_funding" value="<?php echo $secondary_main_funding ?>" id=""> </div>

    <div class="col s6"> <label>In college </label> </div>
    <div class="col s6"> <input type="text" name="college_main_funding" id="" value="<?php echo $secondary_main_funding ?>"> </div>

    <div class="col s6"> <label>In university </label> </div>
    <div class="col s6"> <input type="text" name="university_main_funding" id="" value="<?php echo $secondary_main_funding ?>"> </div>

</div>

Indicate other sources of funding if any

<div class="row">
  <div class="col s6"> <label>In secondary school </label> </div>
  <div class="col s6"> <input type="text" name="secondary_other_funding" id="" value="<?php echo $secondary_main_funding ?>"> </div>

  <div class="col s6"> <label>In college </label> </div>
  <div class="col s6"> <input type="text" name="college_other_funding" id="" value="<?php echo $secondary_main_funding ?>"> </div>

  <div class="col s6"> <label>In university </label> </div>
  <div class="col s6"> <input type="text" name="university_other_funding" id="" value="<?php echo $secondary_main_funding ?>"> </div>

</div>

<div class="row">
    <div class="col s6"> <label>What is your average academic performance? </label> </div>
    <div class="col s6"> <input type="text" name="average_academic_performance" id="" value="<?php echo $secondary_main_funding ?>"> </div>

    <div class="col s6"> <label>Have you been sent away from school? </label> </div>
    <div class="col s6"> <input type="text" name="suspension_status" id="" value="<?php echo $suspension_status ?>"> </div>

    <div class="col s6"> <label>If yes provide reasons for the absence </label> </div>
    <div class="col s6"> <input type="text" name="why_suspension_status" id="" value="<?php echo $why_suspension_status ?>"> </div>

    <div class="col s6"> <label>Specify number of weeks you stayed away from school </label> </div>
    <div class="col s6"> <input type="text" name="suspension_duration" id="" value="<?php echo $suspension_duration ?>"> </div>

    <div class="col s6"> <label>Annual fees (As per fee structure) Kshs </label> </div>
    <div class="col s6"> <input type="text" name="anual_fees" id="" value="<?php echo $anual_fees ?>"> </div>

    <div class="col s6"> <label>Last semester`s/ term fee balance </label> </div>
    <div class="col s6"> <input type="text" name="last_fee_balance" id="" value="<?php echo $last_fee_balance ?>"> </div>

    <div class="col s6"> <label>This semester`s/ term fee balance </label> </div>
    <div class="col s6"> <input type="text" name="this_fee_balance" id="" value="<?php echo $this_fee_balance ?>"> </div>

    <div class="col s6"> <label>Next semester`s/ term fee balance </label> </div>
    <div class="col s6"> <input type="text" name="next_fee_balance" id="" value="<?php echo $next_fee_balance ?>"> </div>

    <div class="col s6"> <label>Loan from HELB (where applicable) </label> </div>
    <div class="col s6"> <input type="text" name="HELB_loan" id="" value="<?php echo $HELB_loan ?>"> </div>

  </div>


</div>
<div class="tab">
<p>REFEREES</p>
      <p>The student/parent/guardian should provide the names and telephone contacts of at least
        two referees who know the family well.</p>

          <div class="row">
      <div class="col s6"> <label>Name </label> </div>
      <div class="col s6"> <input type="text" name="referee1_name" id="" value="<?php echo $referee1_name ?>"> </div>

      <div class="col s6"> <label>Address </label> </div>
      <div class="col s6"> <input type="text" name="referee1_address" id="" value="<?php echo $referee1_address ?>"> </div>

      <div class="col s6"> <label>Telephone </label> </div>
      <div class="col s6"> <input type="text" name="referee1_tel" id="" value="<?php echo $referee1_tel ?>"> </div>

      <div class="col s6"> <label>Name </label> </div>
      <div class="col s6"> <input type="text" name="referee2_name" id="" value="<?php echo $referee2_name ?>"> </div>

      <div class="col s6"> <label>Adress </label> </div>
      <div class="col s6"> <input type="text" name="referee2_address" id="" value="<?php echo $referee2_address ?>"> </div>

      <div class="col s6"> <label>Telephone </label> </div>
      <div class="col s6"> <input type="text" name="referee2_tel" id="" value="<?php echo $referee2_tel ?>"> </div>

    </div>

    <p>STUDENT’S/PARENT’S/GUARDIAN’S DECLARATION</p>
      <p>I hereby declare that the information provided herein is true to the best of my knowledge
        and belief, and I understand that any false information provided shall lead to my automatic
        disqualification by the committee.</p>

        <div class="row">
      <div class="col s6"> <label>Applicant’s Full Name </label> </div>
      <div class="col s6"> <input type="text" name="declare1_full_name" id="" value="<?php echo $declare1_full_name ?>"> </div>

      <div class="col s6"> <label>Date </label> </div>
      <div class="col s6"> <input type="date" name="declaration1_date" id="" value="<?php echo $declaration1_date ?>"> </div>
        </div>
      <p>
        I hereby declare that the information provided herein is true to the best of my knowledge
        and belief, and I understand that any false information provided shall lead to my automatic
        disqualification of the student
      </p>
        <div class="row">

       
      <div class="col s6"> <label>Guardian’s/Parent’s Full Name </label> </div>
      <div class="col s6"> <input type="text" name="declare2_full_name" id="" value="<?php echo $declare2_full_name ?>"> </div>

      <div class="col s6"> <label>Date </label> </div>
      <div class="col s6"> <input type="date" name="declaration2_date" id="" value="<?php echo $declaration2_date ?>"> </div>

      <p>VERIFIED BY:</p>

      <p>Religious leader</p>

      <div class="col s6"> <label>Full Name </label> </div>
      <div class="col s6"> <input type="text" name="religious_leader_name" id="" value="<?php echo $religious_leader_name ?>">  </div>

      <div class="col s6"> <label>Name of the Religion </label> </div>
      <div class="col s6"> <input type="text" name="religion_name" id="" value="<?php echo $religion_name ?>"> </div>

      <div class="col s6"> <label>Type of Religion </label> </div>
      <div class="col s6"> <input type="text" name="religion_type" id="" value="<?php echo $religion_type ?>"> </div>

      <div class="col s6"> <label>Remarks </label> </div>
      <div class="col s6"> <input type="text" name="religious_leader_remarks" id="" value="<?php echo $religious_leader_remarks ?>"> </div>
    </div>

      <p>Chief/Assistant Chief</p>
      <div class="row">
      <div class="col s6"> <label>Name of area Chief/Assistant Chief </label> </div>
      <div class="col s6"> <input type="text" name="chief_name" id="" value="<?php echo $chief_name ?>"> </div>

      <div class="col s6"> <label>Location/Sub-location </label> </div>
      <div class="col s6"> <input type="text" name="chief_location" id="" value="<?php echo $chief_location ?>"> </div>

      <div class="col s6"> <label>Justification </label> </div>
      <div class="col s6"> <input type="text" name="chief_justification" id="" value="<?php echo $chief_justification ?>"> </div>


      <p>FOR OFFICIAL USE ONLY (To be filled by NG-CDF Bursary Committee) </p>

      <div class="col s6"> <label>The form was duly filled and signed </label> </div>
      <div class="col s6"> <input type="text" name="signed_by" id="" value="<?php echo $signed_by ?>"> </div>

      <div class="col s6"> <label>All supportive documents have been attached </label> </div>
      <div class="col s6"> <input type="text" name="all_attached" id="" value="<?php echo $all_attached ?>"> </div>

      <div class="col s6"> <label>Chairman </label> </div>
      <div class="col s6"> <input type="text" name="chairman_name" id="" value="<?php echo $chairman_name ?>"> </div>

      <div class="col s6"> <label>Date </label> </div>
      <div class="col s6"> <input type="text" name="chairman_date_signed" id="" value="<?php echo $chairman_date_signed ?>"> </div>

      <div class="col s6"> <label>Secretary </label> </div>
      <div class="col s6"> <input type="text" name="secretary_name" id="" value="<?php echo $secretary_name ?>"> </div>

      <div class="col s6"> <label>Date </label> </div>
      <div class="col s6"> <input type="text" name="secretary_date_signed" id="" value="<?php echo $secretary_date_signed ?>"> </div>




      <div class="col s6"> <label>Transcription Form </label> </div>
      <div class="col s6"> <input type="file" name="transcript_form" id=""> </div>

      <div class="col s6"> <label>Guardian National ID </label> </div>
      <div class="col s6"> <input type="file" name="guardian_national_id" id=""> </div>


      <div class="col s6"> <label>Student National ID </label> </div>
      <div class="col s6"> <input type="file" name="student_national_id" id=""> </div>


      <div class="col s6"> <label>Birth Certificate </label> </div>
      <div class="col s6"> <input type="file" name="birth_certificate" id="" > </div>


      <div class="col s6"> <label>Current Fee Structure </label> </div>
      <div class="col s6"> <input type="file" name="current_fees_structure" id="" > </div>


      <div class="col s6"> <label>Student School ID</label> </div>
      <div class="col s6"> <input type="file" name="student_school_id" id="" > </div>

      <div class="col s6"> <label>Parents Death Certificate</label> </div>
      <div class="col s6"> <input type="file" name="parents_death_certificate" id="" > </div>

      <div class="col s6"> <label>School Addmission Letter</label> </div>
      <div class="col s6"> <input type="file" name="school_admission_letter" id="" > </div>

      <div class="col s6"> <label>Any Other Relevant Documents</label> </div>
      <div class="col s6"> <input type="file" name="other_relevant_supportive_documents" id="" > </div>
    </div>

</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>