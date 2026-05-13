<?php
	include("connect.php");
	$hl_id=$_POST['hl_id'];
	$hc_id=$_POST['hc_id'];
	$hl_rent=intval($_POST['hl_rent']);
	$user_id=$_POST['user_id'];
	$hb_book_date=date("d/m/y",strtotime($_POST['book_date']));	
	$hb_book_months=intval($_POST['book_months']);	
	
	$hb_total_amount=($hb_book_months*$hl_rent);
	
	$hb_booking_status="waiting";
	
	$q="INSERT INTO hoarding_booking_tbl(hc_id,hl_id,hb_book_date,hb_book_duration,hb_total_amount,user_id,hb_booking_status) VALUES ($hc_id,$hl_id,'$hb_book_date',$hb_book_months,$hb_total_amount,$user_id,'$hb_booking_status')";
	
		//print $q;
	
	$i=mysqli_query($con,$q);
	if($i==1)
	{
		print "<script>";
		print "alert('Thank You for Booking...');";
		print "window.location.href='reg_home.php'";
		print "</script>";
	}
	else
	{
		print("not");

	}

?>