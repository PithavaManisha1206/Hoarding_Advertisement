<?php
	include("connect.php");
	$hc_id=$_POST['hc_id'];
    $hc_name=$_POST['hc_name'];
    $hc_description=$_POST['hc_description'];
	$hc_photo="hc_photo/".$_FILES['hc_photo']['name'];
	
	$path="hc_photo/".$_FILES['hc_photo']['name'];
	move_uploaded_file($_FILES['hc_photo']['tmp_name'],$path);
	
	$q="update hoarding_category_tbl set hc_name='$hc_name',hc_description='$hc_description',hc_photo='$path' where hc_id=$hc_id";
	$i=mysqli_query($con,$q);
    if($i==1)
	{
		header("location:category_view.php");
	}
	else
	{
		echo "Not update";
	}
?>