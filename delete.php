<?php
include 'config.php';
$id=$_GET['id'];
$delete="DELETE FROM team1 WHERE tt_id='$id'";
$delete_q=mysqli_query($conn,$delete);
header('location:teamsetting.php');
?>