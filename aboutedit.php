<?php
include 'config.php';

$id=$_GET['id'];

$select="SELECT * FROM aboutus WHERE id='$id'";
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
        <a href="teamsetting.php" ><span class="las la-table"></span><span>Team Setting</span></a></li>
<li>
<a href="" class="active"><span class="las la-user-alt"></span><span>website setting</span></a></li>
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
<input type="text" name="title" required placeholder="enter title"
 value="<?php echo $fetch['title'] ?>">
<br><br>
<input type="text" name="subtitle" required placeholder="enter subtitle" value="<?php echo $fetch['subtitle'] ?>">
<br><br>
<input type="text" name="description" required placeholder="enter description" value="<?php echo $fetch['description'] ?>"></textarea>
<br><br>

<p>select image</p>
<input type="file" name="aboutphoto">

<br>
<img src="aboutimg/<?php echo $fetch['aboutphoto'] ?>" width="70px">
<br><br>
<input type="text" name="links" required placeholder="enter links" value="<?php echo $fetch['links'] ?>">
<br><br>
<input type="submit" name="update_btn" value="update" class="form-btn">

<a href="websetting.php" class="submit">View All</a>



</form>


<?php
if(isset($_POST['update_btn'])){

$title=$_POST['title'];
     $subtitle=$_POST['subtitle'];
      $description=$_POST['description'];
       $links=$_POST['links'];
     $aboutphoto=$_FILES['aboutphoto']['name']; 
      $tmp_name=$_FILES['aboutphoto']['tmp_name']; 
      $destination="aboutimg/".$aboutphoto;


if($aboutphoto!="")
{
     move_uploaded_file($tmp_name, $destination);  

$update="UPDATE aboutus SET title='$title',subtitle='$subtitle',description='$description',links='$links',aboutphoto='$aboutphoto' WHERE id='$id'";
$update_q=mysqli_query($conn,$update);
header('location:websetting.php');
}
else
{

$update="UPDATE aboutus SET title='$title',subtitle='$subtitle',description='$description',links='$links'  WHERE id='$id'";
$update_q=mysqli_query($conn,$update);
header('location:websetting.php');
}
}
?>



</div>

</main>


</div>
</body>
</html>

















