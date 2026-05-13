<?php
include("connect.php");
$hb_id=$_GET['hb_id'];
$hb_booking_status=$_GET['hb_booking_status'];
print $hb_booking_status;

if($hb_booking_status=='accept')
{
    $q="update hoarding_booking_tbl set hb_booking_status='$hb_booking_status' where hb_id=$hb_id";
}
else
{
    $q="update hoarding_booking_tbl set hb_booking_status='$hb_booking_status' where hb_id=$hb_id";
}		

print $q;
$i=mysqli_query($con,$q);
if($i==1)
{
	header("location:hoarding_booking_view.php");
}
else
{
	echo "not successful";
}
?>