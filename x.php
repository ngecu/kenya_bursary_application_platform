<?php  include('config.php'); ?>

<?php 
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

echo getUserById('devngecu@gmail.com');

?>