<?php
include("connect.php");
$ac_id=$_POST['ac_id'];
$ac_name=$_POST['ac_name'];
$ac_description=$_POST['ac_description'];
$ac_address=$_POST['ac_address'];
$ac_contact_mo=$_POST['ac_contact_mo'];
$ac_contact_person=$_POST['ac_contact_person'];
$hc_id=$_POST['hc_id'];


$path ="ac_logo/".$_FILES['ac_logo']['name'];		
move_uploaded_file($_FILES['ac_logo']['tmp_name'],$path);
	
//$q="UPDATE advertising_company_tbl SET ac_name='$ac_name',ac_description='$ac_description',ac_logo='$path',ac_address='$ac_address',ac_contact_mo='$ac_contact_mo',ac_contact_person='$ac_contact_person',hc_id='$hc_id' WHERE ac_id=$ac_id";

$q="UPDATE advertising_company_tbl SET ac_id='$ac_id',ac_name='$ac_name',ac_description='$ac_description',ac_logo='$path',ac_address='$ac_address',ac_contact_mo='$ac_contact_mo',ac_contact_person='$ac_contact_person',hc_id='$hc_id' WHERE ac_id=$ac_id";
 
$i=mysqli_query($con,$q);
echo $q;
if($i==1)
{
		header("location:advertising_company_view.php");
}
else
{
		echo "Record not inserted...";
}
?>

