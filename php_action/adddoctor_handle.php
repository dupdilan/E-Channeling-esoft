
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
	
	$sql="INSERT INTO doctor(d_id,d_name,d_gender,d_nic,d_catergory,d_dob,d_details)VALUES('$dId','$dName','$dgender','$nic','$dmedcat','$ddob','$dDetails')";
	
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