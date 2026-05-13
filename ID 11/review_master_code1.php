<?php
include("connect.php");
$hl_id=$_POST['hl_id'];
$review_mes=$_POST['review_mes'];
$review_photo="review_photo/".$_FILES['review_photo']['name'];
$review_date=date("d/m/y");
$user_id=$_POST['user_id'];
move_uploaded_file($_FILES['review_photo']['tmp_name'],$review_photo);
$q ="INSERT INTO review_master_tbl (rm_message, hl_id, rm_date,user_id,review_photo) VALUES ('$review_mes',$hl_id,'$review_date','$user_id','$review_photo')";


$i=mysqli_query($con,$q);
if($i==1)
{
	header("location:r_hoarding_location_detail.php?hl_id=$hl_id");
}	
else
{
	print "Not inserted...";
}
?>
	