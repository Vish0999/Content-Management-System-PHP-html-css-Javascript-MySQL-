<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
       <title>GRADIENTEK</title>

      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <link rel="stylesheet" href="admindash.css">
      <link rel="stylesheet" href="dash.css">

 <script src="https://kit.fontawesome.com/a32f28a420.js">

            
</script>
</head>




<body>


<div class="sidebar">
   <div class="sidebar-brand">
    <h2><span class="name"></span>GradienTek</h2>
</div>
    <div class="sidebar-menu">
    <ul>
    <li>
        <a href="admindash.php" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a></li>
    
         <li>
        <a href="team1.php" ><span class="las la-users"></span><span>Add Team</span></a></li>
         <li>
        <a href="teamsetting.php" ><span class="las la-table"></span><span>Team Setting</span></a></li>
<li>
<a href="websetting.php" ><span class="las la-user-alt"></span><span>website setting</span></a></li>
         <li>
        <a href="" ><span class="las la-clipboard-list"></span><span>projects</span></a></li>
         <li>
        <a href="" ><span class="las la-arrow-left"></span><span>Logout</span></a></li>
     </ul>
</div>
</div>

<div class="main-content">
<header>
    <div class="nav">
    <h2>
        <label for="">
             <span class="las la-bars"></span>  
        </label>
        Dashbaoard
</div>
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

<div class="col-div-3">
   <div class="box">
       <p>67<br/><span>Customers</span></p>
       <i class="fa fa-users box-icon"></i>
   </div>
</div>

<div class="col-div-3">
   <div class="box">
       <p>88<br/><span>Projects</span></p>
       <i class="fa fa-list box-icon"></i>
   </div>
</div>

<div class="col-div-3">
   <div class="box">
       <p>99<br/><span>Orders</span></p>
       <i class="fa fa-shopping-bag box-icon"></i>
   </div>
</div>


<div class="col-div-3">
   <div class="box">
       <p>55<br/><span>Tasks</span></p>
       <i class="fa fa-tasks box-icon"></i>
   </div>
</div>

<div class="clearfix"></div>
<br/><br/> 


<div class="col-div-8">
    <div class=" box-8">
          <div class="content-box">
              <p>Top selling Projects <span>View All</span></p>
              </br>
              <table>
                  <tr>
                    <th>Company</th>
                    <th>Cotact</th>
                    <th>Country</th>
                   </tr>
                   <tr>
                    <td>hotel management</td>
                    <td>hotel management</td>
                    <td>hotel management</td>
                   </tr>
                    <tr>
                    <td>hotel management</td>
                    <td>hotel management</td>
                    <td>hotel management</td>
                   </tr>
                    <tr>
                    <td>hotel management</td>
                    <td>hotel management</td>
                    <td>hotel management</td>
                   </tr>
                    <tr>
                    <td>hotel management</td>
                    <td>hotel management</td>
                    <td>hotel management</td>
                   </tr>
              </table>
          </div>
    </div>
</div>

<div class="col-div-4">
   <div class=" box-4">
          <div class="content-box">
               <p>Total Sale <span>View All</span></p>
                <div class="circle-wrap">
                  <div class="circle">
                     <div class="mask.full">
                          <div class="fill">
                           </div>
                           <div class="mask half">
                                 <div class="fill"></div>

                           </div>
                           <div class="inside-circle">50%</div>
                     </div>
                     </div>
                </div>
          </div>
    </div>
</div>

<div class="clearfix"></div>



</main>



</div>



<script>
$(".las").click(function(){
alert("vvv");
});
</script>


</body>
</html>