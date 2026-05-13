<?php
include("connect.php");

$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];

if($usertype=="admin")
{
	$q="select * from admin_login where admin_email='$username' and admin_password='$password'";
	
	print $q;
	$res=mysqli_query($con,$q);
	
	if($row=mysqli_fetch_row($res))
	{
		//APPLIED SESSION
		session_start();
		$_SESSION['username']=$username;
		
		
			
		header("location:admin_home.php");
	}
	else
	{
		echo '<script>alert("Invalid Username or password")
		window.location.href="login.php";
		</script>';
	}
}
else if($usertype=="reguser")
{
	$q="select * from user_master_tbl where user_email='$username' and user_password='$password'";
    $res=mysqli_query($con,$q);

    if($row=mysqli_fetch_row($res))
	{	
        //APPLIED SESSION
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['user_id']=$row[0];
		
			
		header("location:reg_home.php");
	}
	else
		
	{
		echo '<script>alert("Invalid username of password")
		window.location.href="login.php";
		</script>';
	}
}
else
{
	echo '<script>alert("Invalid username of password or Usertype")
	window.location.href="login.php";
	</script>';
}



?>