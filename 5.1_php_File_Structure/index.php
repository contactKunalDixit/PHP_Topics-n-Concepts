<?php
include"functions.php";
require_once"includes/header.php";
$title = "Hello, World";
// require "views/index.view.php";
view("index",$title);
require_once "includes/footer.php"
?>