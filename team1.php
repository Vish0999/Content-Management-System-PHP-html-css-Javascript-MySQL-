















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
        <a href="team1.php" class="active"><span class="las la-users"></span><span>Add Team</span></a></li>
         <li>
        <a href="teamsetting.php" ><span class="las la-table"></span><span>Team Setting</span></a></li>
<li>
<a href="websetting.php" ><span class="las la-user-alt"></span><span>website setting</span></a></li>
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
         <img src="image/vishal.jpeg" width="90px"  height="90px" alt="">
     <div>
     <h4> vishal Mehetre</h4>
    <small>super admin </small>
</div>
    </div>
</header>



<main>











<div class="form-container">

<form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="tt_id" required placeholder="enter member id">
<br><br>
<input type="text" name="tt_name" required placeholder="enter member name">
<br><br>
<input type="text" name="tt_email" required placeholder="enter member email">
<br><br>
<p>Team member work on ?</p>
<select name="p_type" required placeholder="verified by">
      <option value="frontend"  required placeholder="verified by">frontend</option>
      <option value="backend">backend</option>

</select>
<p>select image</p>
<input type="file" name="photo">
<br><br>
<input type="submit" name="insert_btn" value="Insert" class="form-btn">

<a href="teamsetting.php" class="submit">View All</a>



</form>
<?php include 'insertteam1.php'; ?>








</div>

</main>


</div>
</body>
</html>