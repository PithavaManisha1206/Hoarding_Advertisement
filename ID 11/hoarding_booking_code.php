<?php
	include("connect.php");
    $hc_id=$_POST['hc_id'];
	$hl_id=$_POST['hl_id'];
	$hb_book_date=$_POST['hb_book_date'];
	$hb_book_duration = $_POST['hb_book_duration'];
	$hb_total_amount = $_POST['hb_total_amount'];
	
	$user_id=$_POST['user_id'];
	
		
	$q = "INSERT INTO hoarding_booking_tbl (hc_id, hl_id, hb_book_date,hb_book_duration, hb_total_amount ,user_id) VALUES ('$hc_id', '$hl_id', '$hb_book_date', '$hb_book_duration', '$hb_total_amount ','$user_id')";

	$i=mysqli_query($con, $q);

	if ($i)
	{
		header("location:hoarding_booking_view.php");
	}
	else 
	{
		echo "not";
	}
?>
