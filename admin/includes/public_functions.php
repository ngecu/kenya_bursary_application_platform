<?php 


function applicationCount(){
	global $conn;
$sql = "SELECT COUNT(*) as count FROM applicants";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$count = mysqli_fetch_assoc($result)['count'];

return $count;
}


function applicationPercentage(){
	global $conn;
$sql = "SELECT COUNT(*) as count FROM applicants";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$count = mysqli_fetch_assoc($result)['count'];

$percentage = round($count/81*100);

return $percentage;
}

function maleCount(){
	global $conn;
$sql = "SELECT COUNT(*) as count FROM applicants_personal_details WHERE gender='male'";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$count = mysqli_fetch_assoc($result)['count'];

$percentage = round($count/81*100);

return $count;
}

function approvalCount(){
	global $conn;
$sql = "SELECT COUNT(*) as count FROM applicants WHERE approval='1'";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$count = mysqli_fetch_assoc($result)['count'];

$percentage = round($count/81*100);

return $count;
}

function femaleCount(){
	global $conn;
$sql = "SELECT COUNT(*) as count FROM applicants_personal_details WHERE gender='female'";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$count = mysqli_fetch_assoc($result)['count'];

$percentage = round($count/81*100);

return $count;
}

function userCount(){
	global $conn;
$sql = "SELECT COUNT(*) as count FROM users";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$count = mysqli_fetch_assoc($result)['count'];

return $count;
}

if (isset($_GET['approve']) || isset($_GET['disapprove'])) {
	$message = "";
	if (isset($_GET['approve'])) {
		$message = "Application approved successfully";
		$application_id = $_GET['approve'];
	} else if (isset($_GET['disapprove'])) {
		$message = "Application successfully disapproved";
		$application_id = $_GET['disapprove'];
	}
	toggleApprovalApplication($application_id, $message);
}

function toggleApprovalApplication($application_id, $message)
{
global $conn;
$sql = "UPDATE applicants SET approved=!approved WHERE ID=$application_id";

if (mysqli_query($conn, $sql)) {
	$_SESSION['message'] = $message;
	header("location: applications.php");
	exit(0);
}
}


function getApplication($id) {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM applicants WHERE ID=$id LIMIT 1";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$application = mysqli_fetch_assoc($result);


	return $application;
}


function getApplicationPersnalDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM applicants_personal_details WHERE applicant_id=$user_id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		// return username
		return mysqli_fetch_assoc($result);
	} else {
		return null;
	}
}

function getApplicationFamilyBackground($user_id)
{
	global $conn;
	$sql = "SELECT * FROM applicants_family_background_details WHERE applicant_id=$user_id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		// return username
		return mysqli_fetch_assoc($result);
	} else {
		return null;
	}
}

function getApplicationAdditionalInfo($user_id)
{
	global $conn;
	$sql = "SELECT * FROM applicants_aditional_info WHERE applicant_id=$user_id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		// return username
		return mysqli_fetch_assoc($result);
	} else {
		return null;
	}
}


function getApplicationEducatingFundingHistory($user_id)
{
	global $conn;
	$sql = "SELECT * FROM applicants_educating_funding_history WHERE applicant_id=$user_id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		// return username
		return mysqli_fetch_assoc($result);
	} else {
		return null;
	}
}

function getApplicationGuardianDeclaration($user_id)
{
	global $conn;
	$sql = "SELECT * FROM applicants_guardian_declation WHERE applicant_id=$user_id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		// return username
		return mysqli_fetch_assoc($result);
	} else {
		return null;
	}
}

function getApplicationKeyAttachment($user_id)
{
	global $conn;
	$sql = "SELECT * FROM applicants_key_attachment WHERE applicant_id=$user_id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		// return username
		return mysqli_fetch_assoc($result);
	} else {
		return null;
	}
}


function getAllApplications() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM applicants";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$applications = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $applications;
}


function getAllUsers() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $users;
}

function deleteApplication($application_id) {
	global $conn;
	$sql = "DELETE FROM applicants WHERE ID=$application_id";
	$sql2 = "DELETE FROM applicants_personal_details WHERE applicant_id=$application_id";
	$sql3 = "DELETE FROM applicants_family_background_details WHERE applicant_id=$application_id";
	$sql4 = "DELETE FROM applicants_aditional_info WHERE applicant_id=$application_id";
	$sql5 = "DELETE FROM applicants_educating_funding_history WHERE applicant_id=$application_id";
	$sql6 = "DELETE FROM applicants_guardian_declation WHERE applicant_id=$application_id";
	$sql7 = "DELETE FROM applicants_signitories WHERE applicant_id=$application_id";
	$sql8 = "DELETE FROM applicants_key_attachment WHERE applicant_id=$application_id";


	if (mysqli_query($conn, $sql)) {

		if (mysqli_query($conn, $sql2)) {
			
			if (mysqli_query($conn, $sql3)) {
				
				if (mysqli_query($conn, $sql3)) {

					if (mysqli_query($conn, $sql4)) {

						if (mysqli_query($conn, $sql5)) {

							if (mysqli_query($conn, $sql6)) {

								if (mysqli_query($conn, $sql7)) {


								if (mysqli_query($conn, $sql8)) {


			$_SESSION['message'] = "Application successfully deleted";
			header("location: applications.php");
			exit(0);
									}
								}
							}
						}
					}
			
			}
		}
	}
}

}

function deleteUser($admin_id) {
	global $conn;
	$sql = "DELETE FROM users WHERE ID=$admin_id";
	if (mysqli_query($conn, $sql)) {
		$_SESSION['message'] = "User successfully deleted";
		header("location: users.php");
		exit(0);
	}
}


?>