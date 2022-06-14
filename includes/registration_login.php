<?php 

$email    = "";
$errors = array(); 

ob_start();


if(isset($_POST['ingia'])){
    $email = $_POST['Email'];
    $password = $_POST['password'];

    if (empty($email)) { array_push($errors, "Email required"); }
    if (empty($password)) { array_push($errors, "Password required"); }
    
    if (empty($errors)) {
        $password = md5($password); // encrypt password
        $sql = "SELECT * FROM users WHERE email='$email' and password='$password' LIMIT 1";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // get id of created user
            $reg_user_email = mysqli_fetch_assoc($result)['email']; 

            // put logged in user into session array
            $_SESSION['user'] = getUserById($reg_user_email); 

            // if user is admin, redirect to admin area
            // if ( in_array($_SESSION['user']['role'], ["Admin", "Regular"])) {
                
                // redirect to admin area
            // 	header('location: /admin/dashboard.php');
                echo '<script> window.location.replace("http://localhost/bena2/admin/index.php"); </script>';
               
                // exit(0);
            // } else {
                // $_SESSION['message'] = "You are now logged in";
                // redirect to public area
            // 	header('location: index.php');			
            // echo '<script> window.location.replace("http://localhost/bena2/index.php"); </script>';
                // exit(0);
            }
        } else {
            array_push($errors, 'Wrong credentials');
        }
    }

// }

if (isset($_POST['reg_user'])) {
    $username = $_POST['Name'];
    $email = $_POST['Email'];
  
    $password_1 = $_POST['pwd'];
    $password_2 =$_POST['pwd2'];
    

if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($password_1)) { array_push($errors, "Password is required"); }
if ($password_1 != $password_2) {	array_push($errors, "The two passwords do not match");  }


    // Ensure that no user is registered twice. 
    // the email and usernames should be unique
$user_check_query = "SELECT * FROM users WHERE name='$username' 
                            OR email='$email' LIMIT 1";

$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
        }
        if ($user['email'] === $email) {
          array_push($errors, "Email already exists");
        }
    }
    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
        
        $xyz = "INSERT INTO users (name,email,password,role) 
        VALUES ('$username','$email','$password','Regular')";

  

$result = mysqli_query($conn,$xyz);
if($result)
{
            // get id of created user
        $reg_user_id = mysqli_insert_id($conn); 

        // put logged in user into session array
// 			$_SESSION['user'] = getUserById($reg_user_id);

            $_SESSION['message'] = "You are now logged in";
            // redirect to public area
                echo '<script> window.location.replace("approval.php"); </script>';

                mail($email,"Thank You","Than you for registering with us");

                
}
else
{
    echo("Error description: " . mysqli_error($conn));

}

    }
}

function getUserById($x)
{
    global $conn;
    $sql = "SELECT * FROM `users` WHERE email='$x' LIMIT 1;";

    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    // returns user in an array format: 
    // ['id'=>1 'username' => 'Awa', 'email'=>'a@a.com', 'password'=> 'mypass']
    return $user; 
}


?>