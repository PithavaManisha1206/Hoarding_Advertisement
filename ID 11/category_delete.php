<?php
	include("connect.php");
    $hc_id=$_GET['hc_id'];
   
	$q="DELETE FROM hoarding_category_tbl WHERE hc_id=$hc_id";
	$i=mysqli_query($con,$q);
	if($i==1)
	{
		header("location:category_view.php");
	}
	else
	{
		echo "record not deleted...";
	}
?>