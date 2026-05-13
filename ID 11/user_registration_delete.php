<?php
	include("connect.php");
    $user_id=$_GET['user_id'];
   
	$q="DELETE FROM user_master_tbl WHERE user_id=$user_id";
	$i=mysqli_query($con,$q);
	if($i==1)
	{
		header("location:user_registration_view.php");
	}
	else
	{
		echo "record not deleted...";
	}
?>