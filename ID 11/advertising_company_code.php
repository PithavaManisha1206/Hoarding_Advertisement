<?php
include("connect.php");
$ac_name=$_POST['ac_name'];
$ac_description=$_POST['ac_description'];
$ac_address=$_POST['ac_address'];
$ac_contact_mo=$_POST['ac_contact_mo'];
$ac_contact_person=$_POST['ac_contact_person'];
$hc_id=$_POST['hc_id'];	

$path = "ac_logo/".$_FILES['ac_logo']['name'];
	
move_uploaded_file($_FILES['ac_logo']['tmp_name'],$path);
	
$q="INSERT INTO advertising_company_tbl( ac_name,ac_description,ac_logo,ac_address,ac_contact_mo,ac_contact_person,hc_id) VALUES ('$ac_name','$ac_description','$path','$ac_address','$ac_contact_mo','$ac_contact_person','$hc_id')";
$i=mysqli_query($con,$q);
if($i==1)
{
		header("location:advertising_company_view.php");
}
else
{
		echo "not";
}
?>