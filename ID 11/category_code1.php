<?php
	include("connect.php");
    $hc_name=$_POST['hc_name'];
    $hc_description=$_POST['hc_description'];
	$hc_photo=$_FILES['hc_photo']['name'];
	
	$path="hc_photo/".$_FILES['hc_photo']['name'];
	move_uploaded_file($_FILES['hc_photo']['tmp_name'],$path);
	
	$q=("INSERT INTO hoarding_category_tbl(hc_name,hc_description,hc_photo) VALUES ('$hc_name','$hc_description','$path')");
	$i=mysqli_query($con,$q);
	if($i==1)
	{
		header("location:category_view.php");
	}
	else
	{
		echo "not";
	}
?>