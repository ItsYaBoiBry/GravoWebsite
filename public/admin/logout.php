<?php
session_start();
unset($_SESSION["status"]);
unset($_SESSION["email"]);
header("location:adminLogin.php");