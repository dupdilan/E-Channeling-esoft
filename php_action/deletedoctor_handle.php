<?php

	include("connection.php");

	$docId=$_POST["txtdoctorid"];
	//$catergoryName=$_POST["txtcatergoryname"];
	//$catergoryDetails=$_POST["txtcatergorydetails"];

        
	
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="DELETE FROM doctor WHERE d_id='$docId'";
	
	//executting the sql message
	$result=mysqli_query($con,$sql)or die("This Doctor ID is not deteted please try another".mysqli_error());
	
	if($result==true)
	{
        echo"SUCCESS!!!!";
		header("Location:../doctor.php?success=1");
        
	}else{
        echo"Fail!!!!";
		header("Location:../doctor.php?error=1");
        
    }

?>