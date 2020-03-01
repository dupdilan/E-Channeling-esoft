<?php
            require_once('connection.php');  
            
        $medcheck=$_POST['txtmedicheck'];

            $dbobj=new dbconnect();
	       $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT * FROM medicalcheckup WHERE m_name='$medcheck' ;";
		
			$exec = mysqli_query($con,$query);

			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='table' border=1 width=100%>
						<tr>
							<th height=50px >Medical Checkup ID</th>
							<th>Medical Checkup Name</th>
                            <th>Medical Checkup Details</th>
                            <th>Medical Checkup Fee</th>
                            
							
                            
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{

						echo "<tr>
							<td>".$record["m_id"]."</td>
							<td>".$record["m_name"]."</td>
                            <td>".$record["m_details"]."</td>
                            <td>".$record["m_fee"]."</td>
							
							
						</tr>";
					}
					echo "</table>";
                    echo"<br>";
                    echo"Booking or More deatils Contact us  ";
                    echo"<a href='http://localhost/KandyEchannel/index.php#cont'>Click Contact Us</a>";
				}
				else
				{
					echo "Medical Checkup could not be Found! ".mysqli_error($con);
				}
			}
			else{
				echo "Medical Checkup could not be Found! ".mysqli_error($con);
			}
			
		?>