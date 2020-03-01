
<?php

	include("connection.php");

	$medcheckId=$_POST["txtmedicheckid"];
	$medcheckName=$_POST["txtmedicheckname"];
	$medcheckDetails=$_POST["txtmedicheckdetails"];
    $medcheckFee=$_POST["txtmedicheckfee"];
        
	
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="DELETE FROM medicalcheckup WHERE m_id='$medcheckId'";
	
	//executting the sql message
	$result=mysqli_query($con,$sql)or die("This Medical  ID is not detected please try another".mysqli_error());
	
	if($result==true)
	{
        echo"SUCCESS!!!!";
		header("Location:../medicalcheckup.php?success=1");
        
	}else{
        echo"Fail!!!!";
		header("Location:../medicalcheckup.php?error=1");
        
    }

?>