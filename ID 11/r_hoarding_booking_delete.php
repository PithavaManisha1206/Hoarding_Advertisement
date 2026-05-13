<?php
	include("connect.php");
    $hb_id=$_GET['hb_id'];
   
	$q="DELETE FROM hoarding_booking_tbl WHERE hb_id=$hb_id";
	$i=mysqli_query($con,$q);
	if($i==1)
	{
		header("location:r_hoarding_booking_view.php");
	}
	else
	{
		echo "record not deleted...";
	}
?>