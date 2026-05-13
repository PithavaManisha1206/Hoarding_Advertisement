<?php
include("connect.php");
$user_id=$_POST['user_id'];
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_address=$_POST['user_address'];
$user_city=$_POST['user_city'];
$user_mobile=$_POST['user_mobile'];
$user_pincode=$_POST['user_pincode'];
$user_password=$_POST['user_password'];

$user_photo="user_photo/".$_FILES['user_photo']['name'];
move_uploaded_file($_FILES['user_photo']['tmp_name'],$user_photo);

$q="update user_master_tbl set user_name='$user_name',user_email='$user_email',user_address='$user_address',user_city='$user_city',user_pincode='$user_pincode',user_mobile='$user_mobile',user_password='$user_password',user_photo='$user_photo' where user_id=$user_id";
$i=mysqli_query($con,$q);

if($i==1)
{
	header("location:user_registration_view.php");
}
else
{
	echo " Not update...";
}	

?>


