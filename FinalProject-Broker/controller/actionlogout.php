<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["username"]);
header("Location:Practice/finalpractice4/view/login.php");
?>