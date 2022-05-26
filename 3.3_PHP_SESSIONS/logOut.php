<?php
session_start();
session_unset();
session_destroy();

// and then redirect to the login page because that's the most logical navigation
require "../Include/functions.php";
redirect("login_setup.php");
die();


//To remove all global session variables and destroy the session, use session_unset() and session_destroy():
?>