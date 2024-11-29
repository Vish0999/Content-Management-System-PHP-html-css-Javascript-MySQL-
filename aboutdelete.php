<?php
include 'config.php';
$id=$_GET['id'];
$delete="DELETE FROM aboutus WHERE id='$id'";
$delete_q=mysqli_query($conn,$delete);
header('location:websetting.php');
?>