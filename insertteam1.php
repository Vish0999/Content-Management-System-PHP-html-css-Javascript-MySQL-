<?php
include 'config.php';
if(isset($_POST['insert_btn'])){
    $tt_id=$_POST['tt_id'];
     $tt_name=$_POST['tt_name'];
      $tt_email=$_POST['tt_email'];
       $p_type=$_POST['p_type'];
     $photo=$_FILES['photo']['name']; 
      $tmp_name=$_FILES['photo']['tmp_name']; 
      $destination="rimage/".$photo;
     move_uploaded_file($tmp_name, $destination);   


   $insert="INSERT INTO team1 (tt_id,tt_name,photo,tt_email,p_type)
VALUES('$tt_id','$tt_name','$photo','$tt_email','$p_type')";
$insert_q=mysqli_query($conn,$insert);

if($insert_q){
?>
<script type= "text/javascript">
alert("data saved successfully");

</script>
<?php
}
else
{
?>
<script type= "text/javascript">
alert("data not saved successfully");

</script>
<?php
}
}






?>