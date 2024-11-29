

<?php
include 'config.php';
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

      <div class="user-wrapper">
         <img src="image/vishal.jpeg" width="30px" height="30px" alt="">
     <div>
     <h4> vishal Mehetre</h4>
    <small>super admin </small>
</div>
    </div>
</header>



<main>











<div class="form-container">

<form action="" method="POST" enctype="multipart/form-data">

<input type="text" name="title" required placeholder="enter title">
<br><br>
<input type="text" name="subtitle" required placeholder="enter subtitle">
<br><br>
<textarea type="text" name="description" required placeholder="enter description"></textarea>
<br><br>

<p>select image</p>
<input type="file" name="aboutphoto">
<br><br>


<input type="text" name="links" required placeholder="enter links">
<input type="submit" name="insert_btn" value="Insert" class="form-btn">

<a href="websetting.php" class="submit">see in detail</a>



</form>
<?php include 'insertaboutus.php'; ?>








</div>

</main>


</div>
</body>
</html>