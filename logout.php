<?php 

session_start();
unset($_SESSION['user']);
 unset($_SESSION['pass']);
 session_destroy();
 header('Location: index.php');


header('Location: login_sign_up.php')

?>