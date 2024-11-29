<?php
@include 'config.php';
error_reporting(0);

if(isset($_SESSION['name'])){
    header("location: admindash.php");
  }

session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_form WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
       $row = mysqli_fetch_assoc($result);
       $_SESSION['email'] = $row['email'];
       header("location: admindash.php");
    }else{
        echo "<script>alert('Woops! Email or Password  is Incoorect.')</script>";
    }
}
?>

























<!DOCTYPE html>
<html lang="en">
<head>
      <!DOCTYPE html>
<html lang= "en">
<head>
       <meta charset ="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GradienTek Official</title>
<link rel="stylesheet" href="admin.css"> 
<body>

<div class="form-container">
<form action="" method="post">
<h3>Login now</h3>



<?php
if(isset($error)){
    foreach($error as $error){
      echo '<span class="error-msg">'.$error.'</span>';
    }
};

?>




<input type="email" name="email" required placeholder="enter your email">
<input type="password" name="password" required placeholder="enter your password">

<input type="submit" name="submit" value="Login now" class="form-btn">

<p>don't have an account? <a href="register.php">register now</a><p> 
</form>

</div>
</body>
</html>
