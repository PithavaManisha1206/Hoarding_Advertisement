<?php
	include("connect.php");
    $hl_id=$_POST['hl_id'];
	$hl_name = $_POST['hl_name'];
	$hl_address = $_POST['hl_address'];
	$hl_city = $_POST['hl_city'];
	$path = "hl_photo/".$_FILES['hl_photo']['name'];
	$hl_rent = $_POST['hl_rent'];
	$hc_id=$_POST['hc_id'];
	$ac_id=$_POST['ac_id'];
    
    
	move_uploaded_file($_FILES['hl_photo']['tmp_name'], $path);
	
	$q = "update hoarding_location_tbl set hl_name='$hl_name', hl_address='$hl_address', hl_city='$hl_city', hl_photo='$path', hl_rent= '$hl_rent',hc_id='$hc_id',ac_id='$ac_id' where hl_id=$hl_id"; 

	$i = mysqli_query($con, $q);

	if ($i)
	{
		header("location:hoarding_location_view.php");
	}
	else 
	{
		echo "Record not inserted...";
	}
?>
