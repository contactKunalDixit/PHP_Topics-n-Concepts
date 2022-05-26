<?php 
session_start();
include_once "../Include/config.php";
include_once "../Include/functions.php"; 

ensure_user_is_authenticated();     
// This function checks whether user is logged in and if not, it resends the user back to login_setup.php.
// The above function should be on all the protected pages so that the page checks if the user is logged in and if not, no info is displayed and the user is redirected to the login_setup.php i.e. the login page 
print_r($_SESSION); 

?>

<!-- There should be an opposite reverse function in login page which checks that if the user is logged in in the session, then it wont asks for credentials -->