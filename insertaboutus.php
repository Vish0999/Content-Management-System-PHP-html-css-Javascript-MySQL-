<?php
include 'config.php';
if(isset($_POST['insert_btn'])){
    

    $title=$_POST['title'];
     $subtitle=$_POST['subtitle'];
      $description=$_POST['description'];
       $links=$_POST['links'];
     $aboutphoto=$_FILES['aboutphoto']['name']; 
      $tmp_name=$_FILES['aboutphoto']['tmp_name']; 
      $destination="aboutimg/".$aboutphoto;
     move_uploaded_file($tmp_name, $destination);   


   $insert="INSERT INTO aboutus(title,subtitle,description,links,aboutphoto)VALUES('$title','$subtitle','$description','$links','$aboutphoto')";
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