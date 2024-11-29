









<?php


include 'config.php';
$select="SELECT * FROM team1";
$select_q= mysqli_query($conn,$select);
$data=mysqli_num_rows($select_q);

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
       <title>GRADIENTEK</title>

      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <link rel="stylesheet" href="admindash.css">
       <link rel="stylesheet" href="team.css">
       <link rel="stylesheet" href="teamsetting.css">

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
        <a href="teamsetting.php" class="active" ><span class="las la-table"></span><span>Team Setting</span></a></li>
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
         <img src="image/vishal.jpeg" width="90px"  alt="">
     <div>
     <h4> vishal Mehetre</h4>
    <small>super admin </small>
</div>
    </div>
</header>












<main>


<table border="5px" cellspacing="1px" cellpadding="12px">
<tr>
    <th>Name</th>
    <th>email</th>
    <th>Work On</th>
    <th>Photo</th>
    <th colspan="2">Actions</th>
</tr>




<?php
if($data){
        while($row=mysqli_fetch_array($select_q)){
        ?>
        <tr>
           <td><?php echo $row['tt_name'] ?></td>
           <td><?php echo $row['tt_email'] ?></td>
           <td><?php echo $row['p_type'] ?></td>
           <td><img src="rimage/<?php  echo $row['photo']    ?>"
            width="50px"></td>

           <td><a href="edit.php? id=<?php  echo $row['tt_id'] ?>"?>Edit</a></td>
           <td><a onclick="return confirm('are you sure want to delete record???')" href="delete.php? id=<?php  echo $row['tt_id'] ?>"?>delete</td>

        </tr> 

       <?php

 }
}else{
        echo"no record found";
      }
?>
</table>













</main>


</div>
</body>
</html>