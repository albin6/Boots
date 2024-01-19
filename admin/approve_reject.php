<?php
ob_start();
include '../db.php';
$id=$_GET['id'];
$qb=  mysqli_query($con, "update login set Status='Reject' where Id='$id'");
echo '<script>alert("Reject User");window.location.href="viewuswer.php"</script>';
ob_flush();
?>
