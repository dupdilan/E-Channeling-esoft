
<?php

	include("connection.php");

	$dId=$_POST["txtdoctorid"];
	$dName=$_POST["txtdoctorname"];
    $dgender=$_POST["txtdoctorgender"];
    $nic=$_POST["txtdoctornic"]; 
    $ddob=$_POST["txtdoctordob"];
	$dDetails=$_POST["txtdoctordetails"];
    $dmedcat=$_POST["txtcatergory"];

        
	
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="UPDATE doctor SET d_name='$dName',d_gender='$dgender',d_nic='$nic',d_catergory='$dmedcat',d_dob='$ddob',d_details='$dDetails' WHERE d_id='txtdoctorid'";
	
	//executting the sql message
	$result=mysqli_query($con,$sql)or die("This Catergory ID is Already added please try another".mysqli_error());
	
	if($result==true)
	{
        echo"SUCCESS!!!!";
		header("Location:../doctor.php?success=1");
        
	}else{
        echo"Fail!!!!";
		header("Location:../doctor.php?error=1");
        
    }

?>