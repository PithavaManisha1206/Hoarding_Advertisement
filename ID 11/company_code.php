<?php
include("connect.php");
$ac_name=$_POST['ac_name'];
$ac_description=$_POST['ac_description'];
$ac_logo=$_FILES['ac_logo']['name'];
$ac_address=$_POST['ac_address'];
$ac_contact_mo=$_POST['ac_contact_mo'];
$ac_contact_person=$_POST['ac_contact_person'];
	
$path="ac_photo/".$_FILES['ac_photo']['name'];
move_uploaded_file($_FILES['ac_photo']['tmp_name'],$path);
	
$q=("INSERT INTO advertising_company_tbl(ac_name,ac_description,ac_logo,ac_address,ac_contact_mo,ac_contact_person) VALUES ('$ac_name','$ac_description','$ac_logo','$ac_address','$ac_contact_mo','$ac_contact_person','$path')");
$i=mysqli_query($con,$q);
if($i==1)
{
		echo "INSERT";
}
else
{
		echo "not";
}
?>