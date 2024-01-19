<?php 
ob_start();
include './db.php';
session_unset();
header("location:index.php");
ob_flush();
?>