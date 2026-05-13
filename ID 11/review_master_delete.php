<?php
	include("connect.php");
    $rm_id=$_GET['rm_id'];
   
	$q="DELETE FROM review_master_tbl WHERE rm_id=$rm_id";
	$i=mysqli_query($con,$q);
	if($i==1)
	{
		header("location:review_master_view.php");
	}
	else
	{
		echo "record not deleted...";
	}
?>