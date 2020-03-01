<?php
     require_once("connection.php");
function selectCourse(){
    
    $dbobj=new dbconnect();
		$con=$dbobj->getcon();
		$sql="SELECT c_id,c_name FROM catergory";
		$result=mysqli_query($con,$sql)or die("CAnnot execute query");
		$nor=mysqli_num_rows($result);
		if($nor>0)
		{
			while($rec=mysqli_fetch_array($result))
			{
				echo '<option value="'.$rec["c_id"].'">'.$rec["c_name"].'</option>';
			}
		}
		$dbobj->close();
	}

function medicheck(){
    
    $dbobj=new dbconnect();
		$con=$dbobj->getcon();
		$sql="SELECT m_id,m_name FROM medicalcheckup";
		$result=mysqli_query($con,$sql)or die("CAnnot execute query");
		$nor=mysqli_num_rows($result);
		if($nor>0)
		{
			while($rec=mysqli_fetch_array($result))
			{
				echo '<option value="'.$rec["m_id"].'">'.$rec["m_name"].'</option>';
			}
		}
		$dbobj->close();
	}
  
    ?>

