<?php
@include 'config.php';

session_start();

if(isset($_POST['submit']))
{



      $t_name = $_POST['t_name'];
      $t_email =  $_POST['t_email'];
      $t_id = $_POST['t_id'];
      $t_cid = $_POST['t_cid'];
      $position_type = $_POST['position_type'];
      $project =  $_POST['project'];
      $position =  $_POST['position'];
      $image = $_POST['image'];



$insert3 = "INSERT INTO team(t_id, t_name, t_email, project, position, t_fb, image) VALUES('$t_id', '$t_name', '$t_email', '$project', '$position', '$position_type', '$image')";
         


 $query_run= mysqli_query($conn, $insert3);


if($query_run)
{
move_upload_files($_FILES["image"]["tmp_name"],"rimage/".$_FILES["image"]);
$_SESSION['status'] = "image upload susseccfully";
header('Location: team.php');
}
else
{
$_SESSION['status']=  "image not upload susseccfully";
header('Location: team.php');
}
}
?>

