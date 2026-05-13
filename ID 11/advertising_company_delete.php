<?php
	include("connect.php");
    $ac_id=$_GET['ac_id'];
   
	$q="DELETE FROM advertising_company_tbl WHERE ac_id=$ac_id";
	$i=mysqli_query($con,$q);
	if($i==1)
	{
		header("location:advertising_company_view.php");
	}
	else
	{
		echo "record not deleted...";
	}
?>