<?php
ob_start();
include '../db.php';
$id=$_GET['id'];
$qry=  mysqli_query($con, "update payment set Status='Delivered' where Id='$id' ");
echo '<script>alert("Delivered Successfully...");window.location.href="payment.php";</script>';

ob_flush();
?>
