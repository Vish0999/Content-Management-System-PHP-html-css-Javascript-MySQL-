
 <?php
             require 'config.php';
error_reporting(0);

?>



<!DOCTYPE html>
<html lang= "en">
<head>
       <meta charset ="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="header.css">
       <script src="https://kit.fontawesome.com/a32f28a420.js"></script>

</head>
<body bgcolor>



<header>
<nav class="navbar">
     
     
      <ul>

 <div class="logo">
           <p>GRADIENTEK</p>
      </div>

          
          <li><a href="">Login</a></li>
          <li><a href="service.html">Service</a></li>
          <li><a href="cont1.html">Contact</a></li>
          <li><a href="aboutus.php">About Us</a>

         




          </li>
          <li><a href="index.html">Home</a></li>
       <div class="search">
               <input type="text" name="search" id="search" placeholder="search content here">
       </div>

</ul>
      
</nav>
</header>





   
<middle>

<div class="container" >

<div class="row">





      <div class="col-md-8">
           <div class="card1" >
           
           
           <div class="card-body">
           <?php
             require 'config.php';
             $query = "SELECT * FROM aboutus";
             $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                 foreach($query_run as $row)
                 {
                   ?>
 
            <img src="aboutimg/<?php  echo $row['aboutphoto']    ?>"
            width="550px" height="450px">
           <h5><?php echo $row['title']; ?></h5>
           <h6><?php echo $row['subtitle']; ?></h6>
           <p class="card-text"> <?php echo $row['description']; ?></p>
           <a href="<?php echo $row['links']; ?>" class="btn btn-primary">more information</a>
              <?php
                 }
              }
               else
              {
                echo "no record found";
              }
            ?>
         </div>
      </div>
    </div>


<div class="container2" >

<div class="cards">

 <div class="card-swiper-slide">
                        
                            <div class="image-content">
                            <span class="overlay"></span>




 



                            <div class="card-image">
            <img src="image/vishal.jpeg" alt="" class="card-img">



                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Vishal Mehetre</h2>
                            <p class="description">Vishal Mehetre is the Founder and CEO of Gradientek Private Limited. He compete our education in MIT-WPU with MCA management degree.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    


</div>



<div class="cards">

 <div class="card-swiper-slide">
                        
                            <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/suraj.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Suraj Satpute</h2>
                            <p class="description">Suraj Satpute is the Co-Founder and Voice CEO of Gradientek Private Limited. He compete our education in MIT-WPU with MCA management degree.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    


</div>




<div class="cards">

 <div class="card-swiper-slide">
                        
                            <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/tejas.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Tejas Belhekar</h2>
                            <p class="description">Tejas Belhekar is the Founder and Manager of Gradientek Private Limited. He compete our education in MIT-WPU with MCA management degree.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    


</div>


<div class="cards">

 <div class="card-swiper-slide">
                        
                            <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/vishal.jpeg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    


</div>




</div>
</middle>




































</div>
</div>
<footer>
<div class="footers">
  <div class="col">
<p> welcome to official gradientek company website. THIS you complete IT solution. This company developed by Kevin Sisdhpura with help of his team in 2012. This company officially registered in 2018. Now this comapany work on many minor and major project like PHP,JAVA and PYTHON based project. 
</p>
     </div>
   <div class="col"> 
        <h3>office <div class="underline"><span></span></div></h3>
         <p>IT SECTOR</p>
         <p>Navi Mumbai</p>
         <p>Near Tajmahal Hotel, 422605</p>
         <p class="email-id">vbm@gmail.com</p>
</div>
   <div class="col">
        <h3>Links <div class="underline"><span></span></div></h3>
        <ul>
            <li><a href="">home</a></li>
            <li><a href="">contact</a></li>
            <li><a href="">help desk</a></li>
            <li><a href="">service</a></li>
        </ul>
</div>
 <div class="col">
      <h3>Newsletter <div class="underline"><span></span></div></h3>
          <form>
            <i class="far fa-envelope"></i>
            <input type="email" placeholder="enter your email id" required>
             <button type="submit"><i class="fas fa-arrow-right"></i></button>
          </form>


  <div class="social-icons">
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-whatsapp"></i>
  </div>
</div>
</div>
<hr>
</footer>

 










</body>
 <!-- Swiper JS -->
      <script src="js/swiper-bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
</html>