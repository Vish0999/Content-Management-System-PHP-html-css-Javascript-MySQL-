








<?php


include 'config.php';
$select="SELECT * FROM aboutus";
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
        <a href="teamsetting.php" ><span class="las la-table"></span><span>Team Setting</span></a></li>
<li>
<a href="websetting.php"   class="active"><span class="las la-user-alt"></span><span>website setting</span></a></li>
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

<div class="container-fluid">
<div class="card shadow py-3">
<div class="card-header py-3">
<h6>about us
<a href="dataadd.php">
<button type="button" class="btn btn-primary" data-toggle="modal" target="dataadd.php" > Add</button></a>
</h6>
</div>
<div class="card-body">
<div class="table-responsive">
<table id="websitetable" width="100%">

<tr>

<th>title</th>
<th>sub title</th>
<th>description</th>
<th>photo</th>
<th colspan="2">Actions</th>
</tr>
</thead>
<tbody>
<?php
if($data){
        while($row=mysqli_fetch_array($select_q)){
        ?>
        <tr>

           <td><?php echo $row['title'] ?></td>
           <td><?php echo $row['subtitle'] ?></td>
           <td><?php echo $row['description'] ?></td>
           <td><img src="aboutimg/<?php  echo $row['aboutphoto']    ?>"
            width="50px"></td>

           <td><a href="aboutedit.php? id=<?php  echo $row['title'] ?>"?>Edit</a></td>
           <td><a onclick="return confirm('are you sure want to delete record???')" href="aboutdelete.php? id=<?php  echo $row['title'] ?>"?>delete</td>

        </tr> 

       <?php

 }
}else{
        echo"no record found";
      }
?>
</tbody>
</table>
</div>
</div>
</div>
</div>


</main>


</div>
</body>
</html>