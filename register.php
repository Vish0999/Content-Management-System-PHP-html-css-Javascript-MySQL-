
<?php


@include 'config.php';
error_reporting(0);
if(isset($_POST['submit']));{

      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      $admin_type = $_POST['admin_type'];


    $select = "SELECT * FROM admin_form WHERE email = '$email' && password = '$password'";

    $result = mysqli_query($conn, $select);
     
     if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist!!';

     }else{
       
         if($password != $cpassword){
          $error[] = 'password dosent match !!';
    }else{
          $insert = "INSERT INTO admin_form(name, email, password, admin_type) VALUES('$name','$email','$password','$admin_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
}
}
     
};

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
<h3>Register now</h3>



<?php
if(isset($error)){
    foreach($error as $error){
      echo '<span class="error-msg">'.$error.'</span>';
    };
};

?>




<input type="text" name="name" required placeholder="enter your name">
<input type="email" name="email" required placeholder="enter your email">
<input type="password" name="password" required placeholder="enter your password">
<input type="password" name="cpassword" required placeholder="please confirm password">
<select name="admin_type">
      <option value="Manager">Manager</option>
      <option value="Assistance">Assistance</option>
</select>
<input type="submit" name="submit" value="register now" class="form-btn">

<p>already have an account? <a href="login.php">Login</a><p> 
</form>

</div>
</body>
</html>
