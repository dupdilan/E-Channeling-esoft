<?php
session_start();

require("connection.php");
if(isset($_POST["btnsubmit"]))
{
	$username=$_POST["txtusername"];
	$password=$_POST["txtpassword"];
	
	
	
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="SELECT u_name,u_password FROM users WHERE u_name='$username'";
	$res=mysqli_query($con,$sql)or die
	("Can not connect with the table ".mysqli_error());
	$nor=mysqli_num_rows($res);
	if($nor>0)
	{
		$rec=mysqli_fetch_Array($res);
		
		$pssword=$rec["u_password"];
		if($password==$pssword)
		{
			//Creating sessions and storing values
			$_SESSION["login"]["u_name"]=$username;
			header("Location:../dashboard.php");
		}
	}
	else
	{
		header("Location:../login.php?error=1");
	}
	
}
?>