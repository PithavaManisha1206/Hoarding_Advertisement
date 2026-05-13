<?php
include("connect.php");

	$rm_message=$_POST['rm_message'];
	$hl_id = $_POST['hl_id'];
	$rm_date = $_POST['rm_date'];
	$user_id=$_POST['user_id'];
	
	$q = "INSERT INTO review_master_tbl (rm_message, hl_id, rm_date,user_id) VALUES ('$rm_message', '$hl_id', '$rm_date','$user_id')";

	$i=mysqli_query($con, $q);

	if ($i)
	{
		header("location:review_master_view.php");
	}
	else 
	{
		echo "not";
	}

?>
