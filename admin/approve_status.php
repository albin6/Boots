<?php
ob_start();
include '../db.php';
$id=$_GET['id'];
$qb=  mysqli_query($con, "update login set Status='Approve' where Id='$id'");
echo '<script>alert("Approve User");window.location.href="viewuswer.php"</script>';
ob_flush();
?>
