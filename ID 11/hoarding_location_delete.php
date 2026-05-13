<?php
	include("connect.php");
    $hl_id=$_GET['hl_id'];
   
	$q="DELETE FROM hoarding_location_tbl WHERE hl_id=$hl_id";
	$i=mysqli_query($con,$q);
	if($i==1)
	{
		header("location:hoarding_location_view.php");
	}
	else
	{
		echo "record not deleted...";
	}
?>