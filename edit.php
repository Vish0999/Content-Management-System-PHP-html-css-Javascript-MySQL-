<?php
include 'config.php';

$id=$_GET['id'];

$select="SELECT * FROM team1 WHERE tt_id='$id'";
$select_q=mysqli_query($conn,$select);
$fetch=mysqli_fetch_array($select_q);
?>












<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
       <title>GRADIENTEK</title>

      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <link rel="stylesheet" href="admindash.css">
       <link rel="stylesheet" href="team.css">
       <link rel="stylesheet" href="team1.css">
        
</head>




<body>


<div class="sidebar">
   <div class="sidebar-brand">
    <h2><span class="name"></span>GradienTek</h2>
</div>
    <div class="sidebar-menu">
    <ul>
<li>
        <a href="admindash.php" ><span class="las la-igloo"></span><span>Dashboard</span></a></li>
    
         <li>
        <a href="team1.php" ><span class="las la-users"></span><span>Add Team</span></a></li>
         <li>
        <a href="teamsetting.php" class="active"><span class="las la-table"></span><span>Team Setting</span></a></li>
<li>
<a href="" ><span class="las la-user-alt"></span><span>website setting</span></a></li>
         <li>
        <a href="" ><span class="las la-clipboard-list"></span><span>projects</span></a></li>
         <li>
        <a href="" ><span class="las la-arrow-left"></span><span>Logout</span></a></li></div>
</div>

<div class="main-content">
<header>

    <h2>
        <label for="">
             <span class="las la-bars"></span>  
        </label>
        Team-adding
    </h2>
     <div class= "search-wrapper">
         <span class="las la-search"></span>
         <input type="search" placeholder="search here" />
    </div>

      <div class="user-wrapper"
         <img src="image/tejas.jpg" width="30px" height="30px" alt="">
     <div>
     <h4> vishal Mehetre</h4>
    <small>super admin </small>
</div>
    </div>
</header>



<main>











<div class="form-container">











<form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="tt_id" required placeholder="enter member id"
 value="<?php echo $fetch['tt_id'] ?>">
<br><br>
<input type="text" name="tt_name" required placeholder="enter member name" value="<?php echo $fetch['tt_name'] ?>">
<br><br>
<input type="text" name="tt_email" required placeholder="enter member email" value="<?php echo $fetch['tt_email'] ?>">
<br><br>
<p>Team member work on ?</p>
<select name="p_type" required placeholder="verified by" value="<?php echo $fetch['p_type'] ?>">
      <option value="frontend"  required placeholder="verified by">frontend</option>
      <option value="backend">backend</option>

</select>
<p>select image</p>
<input type="file" name="photo">

<br>
<img src="rimage/<?php echo $fetch['photo'] ?>" width="70px">
<br><br>
<input type="submit" name="update_btn" value="update" class="form-btn">

<a href="teamsetting.php" class="submit">View All</a>



</form>


<?php
if(isset($_POST['update_btn'])){

$tt_id=$_POST['tt_id'];
     $tt_name=$_POST['tt_name'];
      $tt_email=$_POST['tt_email'];
       $p_type=$_POST['p_type'];
     $photo=$_FILES['photo']['name']; 
      $tmp_name=$_FILES['photo']['tmp_name']; 
      $destination="rimage/".$photo;


if($photo!="")
{
     move_uploaded_file($tmp_name, $destination);  

$update="UPDATE team1 SET tt_id='$tt_id',tt_name='$tt_name',tt_email='$tt_email',p_type='$p_type',photo='$photo' WHERE tt_id='$id'";
$update_q=mysqli_query($conn,$update);
header('location:teamsetting.php');
}
else
{

$update="UPDATE team1 SET tt_id='$tt_id',tt_name='$tt_name',tt_email='$tt_email',p_type='$p_type' WHERE tt_id='$id'";
$update_q=mysqli_query($conn,$update);
header('location:teamsetting.php');
}
}
?>



</div>

</main>


</div>
</body>
</html>

















