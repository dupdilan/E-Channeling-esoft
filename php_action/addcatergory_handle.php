
<?php

	include("connection.php");

	$catergoryId=$_POST["txtcatergoryid"];
	$catergoryName=$_POST["txtcatergoryname"];
	$catergoryDetails=$_POST["txtcatergorydetails"];

        
	
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="INSERT INTO catergory(c_id,c_name,c_details)VALUES('$catergoryId','$catergoryName','$catergoryDetails')";
	
	//executting the sql message
	$result=mysqli_query($con,$sql)or die("This Catergory ID is Already added please try another".mysqli_error());
	
	if($result==true)
	{
        echo"SUCCESS!!!!";
		header("Location:../catergory.php?success=1");
        
	}else{
        echo"Fail!!!!";
		header("Location:../catergory.php?error=1");
        
    }

	
?>