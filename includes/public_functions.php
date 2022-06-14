<?php
$errors = array();





function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


if (isset($_POST['create_application'])) { 



    $serial_number = $_POST['serial_number'];
    $ip = $_POST['ip'];
    $applied_account = $_POST['applied_account'];
    
    
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $school = $_POST['name_of_school'];
    $gender = $_POST['gender'];
    $IDNo = $_POST['IDNo'];
    $name_of_school = $_POST['name_of_school'];
    $reg_no = $_POST['reg_no'];
    $campus = $_POST['campus'];
    $department = $_POST['department'];
    $course_of_study = $_POST['course_of_study'];
    $mode_of_study = $_POST['mode_of_study'];
    $Class = $_POST['Class'];
    $Academic_year = $_POST['Academic_year'];
    $course_duration = $_POST['course_duration'];
    $expected_year_and_month_of_completion = $_POST['expected_year_and_month_of_completion'];
    $tel = $_POST['tel'];
    $physical_address = $_POST['physical_address'];
    $permanent_address = $_POST['permanent_address'];
    $location = $_POST['location'];
    $sub_location = $_POST['sub_location'];
    $ward = $_POST['ward'];
    $institution_tel = $_POST['institution_tel'];
    $amount_applied_for = $_POST['amount_applied_for'];
    $institution_postal_address = $_POST['institution_postal_address'];



    $total_orphan = $_POST['total_orphan'];
    $partial_ophan = $_POST['partial_ophan'];
    $single_parent = $_POST['single_parent'];
    $both_parents_alive = $_POST['both_parents_alive'];
    $alive_siblings=$_POST['alive_siblings'];
    $family_income = $_POST['family_income'];
    $family_expenses = $_POST['family_expenses'];
    $fathers_name = $_POST['fathers_name'];
    $fathers_address = $_POST['fathers_address'];
    $fathers_tell = $_POST['fathers_tell'];
    $fathers_occupation = $_POST['fathers_occupation'];
    $fathers_employment = $_POST['fathers_employment'];
    $fathers_source_of_income = $_POST['fathers_source_of_income'];
    $mothers_name = $_POST['mothers_name'];
    $mothers_address = $_POST['mothers_address'];
    $mothers_tell = $_POST['mothers_tell'];
    $mothers_occupation = $_POST['mothers_occupation'];
    $mothers_employment = $_POST['mothers_employment'];
    $mothers_source_of_income = $_POST['mothers_source_of_income'];
    $guardian_name = $_POST['guardian_name'];
    $guardian_address = $_POST['guardian_address'];
    $guardian_tell = $_POST['guardian_tell'];
    $guardian_occupation = $_POST['guardian_occupation'];
    $guardian_employment = $_POST['guardian_employment'];
    $guardian_source_of_income = $_POST['guardian_source_of_income'];



    $why_apply = $_POST['why_apply'];
    $bursary_history = $_POST['bursary_history'];
    $more_bursary_history = $_POST['more_bursary_history'];
    $financial_og_history = $_POST['financial_og_history'];
    $physical_impairment = $_POST['physical_impairment'];
    $disability = $_POST['disability'];
    $parent_disability = $_POST['parent_disability'];
    $parent_disability_description = $_POST['parent_disability_description'];
    $parent_medical_condition = $_POST['parent_medical_condition'];
    $parent_medical_condition_description = $_POST['parent_medical_condition_description'];
    

    $secondary_main_funding = $_POST['secondary_main_funding'];
    $college_main_funding = $_POST['college_main_funding'];
    $university_main_funding = $_POST['university_main_funding'];

    $secondary_other_funding = $_POST['secondary_other_funding'];
    $college_other_funding = $_POST['college_other_funding'];
    $university_other_funding = $_POST['university_other_funding'];

    $average_academic_performance = $_POST['average_academic_performance'];
    $suspension_status = $_POST['suspension_status'];
    $why_suspension_status = $_POST['why_suspension_status'];
    $suspension_duration = $_POST['suspension_duration'];
    $anual_fees = $_POST['anual_fees'];
    $last_fee_balance = $_POST['last_fee_balance'];
    $this_fee_balance = $_POST['this_fee_balance'];
    $next_fee_balance = $_POST['next_fee_balance'];
    $HELB_loan = $_POST['HELB_loan'];

    $referee1_name = $_POST['referee1_name'];
    $referee1_address = $_POST['referee1_address'];
    $referee1_tel = $_POST['referee1_tel'];
    $referee2_name = $_POST['referee2_name'];
    $referee2_address = $_POST['referee2_address'];
    $referee2_tel = $_POST['referee2_tel'];
    

    $declare1_full_name = $_POST['declare1_full_name'];
    $declaration1_date = $_POST['declaration1_date'];
    $declare2_full_name = $_POST['declare2_full_name'];
    $declaration2_date = $_POST['declaration2_date'];


    if (empty($applied_account)) { array_push($errors, "Applying Username required"); }
    if (empty($full_name)) { array_push($errors, "Full Name required"); }
    if (empty($dob)) { array_push($errors, "Date Of Birth required"); }
    if (empty($school)) { array_push($errors, "School required"); }
    if (empty($gender)) { array_push($errors, "Gender required"); }
    if (empty($IDNo)) { array_push($errors, "ID No required"); }
    if (empty($name_of_school)) { array_push($errors, "Name of School required"); }
    if (empty($reg_no)) { array_push($errors, "Reg No required"); }
    if (empty($campus)) { array_push($errors, "Campus required"); }
    if (empty($department)) { array_push($errors, "Department required"); }
    if (empty($course_of_study)) { array_push($errors, "Course Of Study required"); }
    if (empty($Class)) { array_push($errors, "Class required"); }
    if (empty($Academic_year)) { array_push($errors, "Academic Year required"); }
    if (empty($course_duration)) { array_push($errors, "Course Duration required"); }
    if (empty($expected_year_and_month_of_completion)) { array_push($errors, "Expected Completion Date required"); }
    if (empty($tel)) { array_push($errors, "Telephone required"); }
    if (empty($physical_address)) { array_push($errors, "Physical Address required"); }
    if (empty($permanent_address)) { array_push($errors, "Permanent Address required"); }
    if (empty($location)) { array_push($errors, "Location required"); }
    if (empty($sub_location)) { array_push($errors, "Sub Location required"); }
    if (empty($ward)) { array_push($errors, "Ward required"); }
    if (empty($institution_tel)) { array_push($errors, "Institution Telephone required"); }
    if (empty($amount_applied_for)) { array_push($errors, "Amount Apllied for required"); }
    if (empty($institution_postal_address)) { array_push($errors, "Institution Postal Address required"); }
    if (empty($total_orphan)) { array_push($errors, "Total Orphan required"); }
    if (empty($partial_ophan)) { array_push($errors, "Partial Orphan required"); }
    if (empty($single_parent)) { array_push($errors, "Single Parent required"); }
    if (empty($both_parents_alive)) { array_push($errors, "Both Parent Alive required"); }
    if (empty($alive_siblings)) { array_push($errors, "Alive Siblings required"); }
    if (empty($family_income)) { array_push($errors, "Family Income required"); }


    if (empty($family_expenses)) { array_push($errors, "Family Expenses required"); }
    // if (empty($fathers_name)) { array_push($errors, "Father's Name required"); }
    // if (empty($fathers_address)) { array_push($errors, "Father's Address required"); }
    // if (empty($fathers_tell)) { array_push($errors, "Father's Telephone required"); }
    // if (empty($fathers_occupation)) { array_push($errors, "Father's Occupation required"); }
    // if (empty($fathers_employment)) { array_push($errors, "Father's Employment required"); }
    // if (empty($fathers_source_of_income)) { array_push($errors, "Name of School required"); }
    if (empty($why_apply)) { array_push($errors, "Why Applied required"); }
    if (empty($bursary_history)) { array_push($errors, "bursary history required"); }
    if (empty($more_bursary_history)) { array_push($errors, "more bursary history required"); }
    if (empty($financial_og_history)) { array_push($errors, "financial og history required"); }
    if (empty($physical_impairment)) { array_push($errors, "physical_impairment required"); }
    if (empty($disability)) { array_push($errors, "disability required"); }
    if (empty($parent_disability)) { array_push($errors, "parent disability required"); }
    if (empty($parent_disability_description)) { array_push($errors, "parent disability description required"); }
    if (empty($parent_medical_condition)) { array_push($errors, "parent medical condition required"); }
    if (empty($parent_medical_condition_description)) { array_push($errors, "parent medical condition description required"); }
    if (empty($secondary_main_funding)) { array_push($errors, "secondary main funding required"); }
    if (empty($college_main_funding)) { array_push($errors, "college main funding required"); }
    if (empty($university_main_funding)) { array_push($errors, "university main funding required"); }
    if (empty($secondary_other_funding)) { array_push($errors, "secondary other funding required"); }
    if (empty($college_other_funding)) { array_push($errors, "college other funding required"); }
    if (empty($university_other_funding)) { array_push($errors, "university other funding required"); }
    if (empty($average_academic_performance)) { array_push($errors, "average academic performance required"); }
    if (empty($suspension_status)) { array_push($errors, "suspension status required"); }
    if (empty($why_suspension_status)) { array_push($errors, "why suspension status required"); }
    if (empty($suspension_duration)) { array_push($errors, "suspension duration required"); }
    if (empty($anual_fees)) { array_push($errors, "anual fees required"); }
    if (empty($last_fee_balance)) { array_push($errors, "last fee balance required"); }
    if (empty($this_fee_balance)) { array_push($errors, "this fee balance required"); }


    if (empty($next_fee_balance)) { array_push($errors, "next fee balance required"); }
    if (empty($HELB_loan)) { array_push($errors, "HELB loan required"); }
    if (empty($referee1_name)) { array_push($errors, "referee1 name required"); }
    if (empty($referee1_address)) { array_push($errors, "referee1 address required"); }
    if (empty($referee1_tel)) { array_push($errors, "referee1 tel required"); }
    if (empty($referee2_name)) { array_push($errors, "referee2 name required"); }
    if (empty($referee2_address)) { array_push($errors, "referee2 address required"); }
    if (empty($referee2_tel)) { array_push($errors, "referee2 tel required"); }
    if (empty($declare1_full_name)) { array_push($errors, "declare1 full name required"); }
    if (empty($declaration1_date)) { array_push($errors, "declaration1 date required"); }
    if (empty($declare2_full_name)) { array_push($errors, "declare2 full name required"); }
    if (empty($declaration2_date)) { array_push($errors, "declaration2 date required"); }


    if (empty($errors)) {
        $query = "INSERT INTO applicants (ip_address,serial_number,applied_account) VALUES('$ip','$serial_number',$applied_account)";
        if(mysqli_query($conn, $query)){ // if post created successfully
            $inserted_applicant_id = mysqli_insert_id($conn);

            $sql1 = "INSERT INTO applicants_personal_details (
                applicant_id, 
                full_name,
                gender,
                dob,
                school,
                reg_no,
                campus,
                department,
                course,
                mode_of_study,
                year_of_study,
                academic_year,
                course_duration,
                expected_year_and_month_of_completion,
                physical_address,
                permanent_address,
                location,
                sub_location,
                ward,
                institution_postal_address,
                institution_tel,
                amount_applied_for) VALUES(
                    '$inserted_applicant_id', '$full_name','$gender','$dob','$school','$reg_no','$campus','$department','$course_of_study','$mode_of_study','$Class','$Academic_year',
                    '$course_duration','$expected_year_and_month_of_completion','$physical_address','$permanent_address','$location','$sub_location','$ward','$institution_postal_address','$institution_tel','$amount_applied_for')";
            

                    if (mysqli_query($conn, $sql1)) {
                        // $_SESSION['message'] = "Post created successfully";
                        // header('location: index.php');

                                                $sql2 = "INSERT INTO applicants_family_background_details (
                            applicant_id,
                            total_orphan, 
                            partial_ophan,
                            single_parent,
                            both_parents_alive,
                            alive_siblings,
                            family_income,
                            family_expenses,
                            fathers_name,
                            fathers_address,
                            fathers_tell,
                            fathers_occupation,
                            fathers_employment,
                            fathers_source_of_income,
                            mothers_name,
                            mothers_address,
                            mothers_tell,
                            mothers_occupation,
                            mothers_employment,
                            mothers_source_of_income,
                            guardian_name,
                            guardian_address,
                            guardian_tell,
                            guardian_occupation,
                            guardian_employment,
                            guardian_source_of_income) VALUES(
                                '$inserted_applicant_id', '$total_orphan','$partial_ophan','$single_parent','$both_parents_alive','$alive_siblings','$family_income','$family_expenses','$fathers_name','$fathers_address',
                                '$fathers_tell','$fathers_occupation','$fathers_employment','$fathers_source_of_income','$mothers_name','$mothers_address','$mothers_tell','$mothers_occupation','$mothers_employment','$mothers_source_of_income',
                                '$guardian_name','$guardian_address','$guardian_tell','$guardian_occupation','$guardian_employment','$guardian_source_of_income')";
            
                                
                                if(mysqli_query($conn, $sql2)){ 

                                    $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
                                    $disability_evidence_extension  = pathinfo( $_FILES["disability_evidence"]["name"], PATHINFO_EXTENSION ); // jpg
                                    $disability_evidence_basename   = $filename . "." . $disability_evidence_extension; // 5dab1961e93a7_1571494241.jpg
                                    $disability_evidence_source       = $_FILES["disability_evidence"]["tmp_name"];
                                    $disability_evidence_destination  = "uploads/disability_evidence/{$disability_evidence_basename}";
                                    /* move the file */
                                    move_uploaded_file( $disability_evidence_source, $disability_evidence_destination );




                                    $sql3 = "INSERT INTO applicants_aditional_info (
                                        applicant_id,
                                        why_apply, 
                                        bursary_history,
                                        more_bursary_history,
                                        financial_og_history,
                                        physical_impairment,
                                        disability,
                                        disability_evidence,
                                        parent_disability,
                                        parent_disability_description,
                                        parent_medical_condition,
                                        parent_medical_condition_description) VALUES(
                                            '$inserted_applicant_id', '$why_apply','$bursary_history','$more_bursary_history','$financial_og_history','$physical_impairment','$disability','$disability_evidence_basename',
                                            '$parent_disability','$parent_disability_description','$parent_medical_condition','$parent_medical_condition_description')";


                                                if(mysqli_query($conn, $sql3)){
                                                    // echo "yes additional information";  

                                                $sql4 = "INSERT INTO applicants_educating_funding_history (
                                                    applicant_id,
                                                    secondary_main_funding,
                                                    college_main_funding,
                                                    university_main_funding,
                                                    secondary_other_funding,
                                                    college_other_funding,
                                                    university_other_funding,
                                                    average_academic_performance,
                                                    suspension_status,
                                                    why_suspension_status,
                                                    suspension_duration,
                                                    anual_fees,
                                                    last_fee_balance,
                                                    this_fee_balance,
                                                    next_fee_balance,
                                                    HELB_loan ) VALUES(
                                                       '$inserted_applicant_id', '$secondary_main_funding', '$college_main_funding','$university_main_funding','$secondary_other_funding','$college_other_funding',
                                                        '$university_other_funding','$average_academic_performance','$suspension_status','$why_suspension_status','$suspension_duration','$anual_fees','$last_fee_balance','$this_fee_balance','$next_fee_balance','$HELB_loan')";


                                                        if(mysqli_query($conn, $sql4)){
                                                           

                                                            
                                                            $sql5 = "INSERT INTO applicants_guardian_declation (
                                                                applicant_id,
                                                                declare1_full_name,
                                                                declaration1_date,
                                                                declare2_full_name,
                                                                declaration2_date
                                                             ) VALUES (
                                                                '$inserted_applicant_id', 
                                                                '$declare1_full_name', 
                                                                '$declaration1_date',
                                                                '$declare2_full_name',
                                                                '$declaration2_date',
                                                               )";
                                                            

                                                            if(mysqli_query($conn, $sql5)){
                                                                // echo "yes applicants_guardian_declation";
                                                                
                                                                $sql6 = "INSERT INTO applicants_signitories (
                                                                    applicant_id,
                                                                    signed_by,
                                                                    all_attached,
                                                                    chairman_name,
                                                                    chairman_date_signed,
                                                                    secretary_name,
                                                                    secretary_date_signed ) VALUES (
                                                                        '$inserted_applicant_id','$signed_by','$all_attached','$chairman_name','$chairman_date_signed','$secretary_name','$secretary_date_signed' )";
                                                                
                                                                if(mysqli_query($conn, $sql6)){

                                                                    /* create new name file */
                                                                    $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
                                                                    $transcript_form_extension  = pathinfo( $_FILES["transcript_form"]["name"], PATHINFO_EXTENSION ); // jpg
                                                                    $transcript_form_basename   = $filename . "." . $transcript_form_extension; // 5dab1961e93a7_1571494241.jpg
                                                                    $transcript_form_source       = $_FILES["transcript_form"]["tmp_name"];
                                                                    $transcript_form_destination  = "uploads/transcript_form/{$transcript_form_basename}";
                                                                    /* move the file */
                                                                    move_uploaded_file( $transcript_form_source, $transcript_form_destination );

                                                                    $guardian_national_id_extension  = pathinfo( $_FILES["guardian_national_id"]["name"], PATHINFO_EXTENSION ); // jpg
                                                                    $guardian_national_id_basename   = $filename . "." . $guardian_national_id_extension; // 5dab1961e93a7_1571494241.jpg
                                                                    $guardian_national_id_source       = $_FILES["guardian_national_id"]["tmp_name"];
                                                                    $guardian_national_id_destination  = "uploads/guardian_national_id/{$guardian_national_id_basename}";
                                                                    /* move the file */
                                                                    move_uploaded_file( $guardian_national_id_source, $guardian_national_id_destination );


                                                                    $student_national_id_extension  = pathinfo( $_FILES["student_national_id"]["name"], PATHINFO_EXTENSION ); // jpg
                                                                    $student_national_id_basename   = $filename . "." . $student_national_id_extension; // 5dab1961e93a7_1571494241.jpg
                                                                    $student_national_id_source       = $_FILES["student_national_id"]["tmp_name"];
                                                                    $student_national_id_destination  = "uploads/student_national_id/{$student_national_id_basename}";
                                                                    /* move the file */
                                                                    move_uploaded_file( $student_national_id_source, $student_national_id_destination );



                                                                    $birth_certificate_extension  = pathinfo( $_FILES["birth_certificate"]["name"], PATHINFO_EXTENSION ); // jpg
                                                                    $birth_certificate_basename   = $filename . "." . $birth_certificate_extension; // 5dab1961e93a7_1571494241.jpg
                                                                    $birth_certificate_source       = $_FILES["birth_certificate"]["tmp_name"];
                                                                    $birth_certificate_destination  = "uploads/birth_certificate/{$birth_certificate_basename}";
                                                                    /* move the file */
                                                                    move_uploaded_file( $birth_certificate_source, $birth_certificate_destination );


                                                                    $student_school_id_extension  = pathinfo( $_FILES["student_school_id"]["name"], PATHINFO_EXTENSION ); // jpg
                                                                    $student_school_id_basename   = $filename . "." . $student_school_id_extension; // 5dab1961e93a7_1571494241.jpg
                                                                    $student_school_id_source       = $_FILES["student_school_id"]["tmp_name"];
                                                                    $student_school_id_destination  = "uploads/student_school_id/{$student_school_id_basename}";
                                                                    /* move the file */
                                                                    move_uploaded_file( $student_school_id_source, $student_school_id_destination );

                                                                    
                                                                    $parents_death_certificate_extension  = pathinfo( $_FILES["parents_death_certificate"]["name"], PATHINFO_EXTENSION ); // jpg
                                                                    $parents_death_certificate_basename   = $filename . "." . $parents_death_certificate_extension; // 5dab1961e93a7_1571494241.jpg
                                                                    $parents_death_certificate_source       = $_FILES["parents_death_certificate"]["tmp_name"];
                                                                    $parents_death_certificate_destination  = "uploads/parents_death_certificate/{$parents_death_certificate_basename}";
                                                                    /* move the file */
                                                                    move_uploaded_file( $parents_death_certificate_source, $parents_death_certificate_destination );


                                                                    
                                                                    $current_fees_structure_extension  = pathinfo( $_FILES["current_fees_structure"]["name"], PATHINFO_EXTENSION ); // jpg
                                                                    $current_fees_structure_basename   = $filename . "." . $current_fees_structure_extension; // 5dab1961e93a7_1571494241.jpg
                                                                    $current_fees_structure_source       = $_FILES["current_fees_structure"]["tmp_name"];
                                                                    $current_fees_structure_destination  = "uploads/current_fees_structure/{$current_fees_structure_basename}";
                                                                    /* move the file */
                                                                    move_uploaded_file( $current_fees_structure_source, $current_fees_structure_destination);


                                                                    
                                                                    $school_admission_letter_extension  = pathinfo( $_FILES["school_admission_letter"]["name"], PATHINFO_EXTENSION ); // jpg
                                                                    $school_admission_letter_basename   = $filename . "." . $school_admission_letter_extension; // 5dab1961e93a7_1571494241.jpg
                                                                    $school_admission_letter_source       = $_FILES["school_admission_letter"]["tmp_name"];
                                                                    $school_admission_letter_destination  = "uploads/school_admission_letter/{$school_admission_letter_basename}";
                                                                    /* move the file */
                                                                    move_uploaded_file( $school_admission_letter_source, $school_admission_letter_destination );


                                                                    
                                                                    $other_relevant_supportive_documents_extension  = pathinfo( $_FILES["other_relevant_supportive_documents"]["name"], PATHINFO_EXTENSION ); // jpg
                                                                    $other_relevant_supportive_documents_basename   = $filename . "." . $other_relevant_supportive_documents_extension; // 5dab1961e93a7_1571494241.jpg
                                                                    $other_relevant_supportive_documents_source       = $_FILES["other_relevant_supportive_documents"]["tmp_name"];
                                                                    $other_relevant_supportive_documents_destination  = "uploads/other_relevant_supportive_documents/{$other_relevant_supportive_documents_basename}";
                                                                    /* move the file */
                                                                    move_uploaded_file( $other_relevant_supportive_documents_source, $other_relevant_supportive_documents_destination );

                                                                    echo $transcript_form_basename. ' --------------- '.$guardian_national_id_basename. ' --------------- '.$student_national_id_basename.' ---------------------  '.$birth_certificate_basename. ' --------------- '.$student_school_id_basename. ' --------------- '.$current_fees_structure_basename.' ---------------------  '.$school_admission_letter_basename. ' --------------- '.$other_relevant_supportive_documents_basename;

                                                                $sql7 = "INSERT INTO applicants_key_attachment (
                                                                    applicant_id,
                                                                    transcript_form, 
                                                                    guardian_national_id,
                                                                    student_national_id,
                                                                    birth_certificate,
                                                                    student_school_id,
                                                                    parents_death_certificate,
                                                                    current_fees_structure,
                                                                    school_admission_letter,
                                                                    other_relevant_supportive_documents) VALUES(
                                                                        '$inserted_applicant_id', '$transcript_form_basename', '$guardian_national_id_basename','$student_national_id_basename','$birth_certificate_basename','$student_school_id_basename','$parents_death_certificate_basename','$current_fees_structure_basename','$school_admission_letter_basename','$other_relevant_supportive_documents_basename')";
                
                                                                        if(mysqli_query($conn, $sql7)){
                                                                          
                                                                            echo '<script> window.location.replace("approval.php"); </script>';

                                                                        }
                                                                        else{
                                                                           echo  mysqli_error($conn);
                                                                        }
            }

                                                                }

                                                                else{
                                                                    echo "error is ".mysqli_error($conn);
                                                                }


                                            }
                                            
                                           
                                                    }

                                                   
                                                }

                                                 

                                }
                             



                    }
                  
            
        }
    }
        

