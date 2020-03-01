<?php
            require_once('connection.php');  
            
        $catergory=$_POST["txtcatergory"];

            $dbobj=new dbconnect();
	       $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT * FROM doctor WHERE d_catergory='$catergory' ;";
		
			$exec = mysqli_query($con,$query);

			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='table' border=1 width=100%>
						<tr>
							<th height=50px >Doctor ID</th>
							<th>Doctorp Name</th>
                            <th>Doctorp Gender</th>
                            
                            <th>Doctor Catergory</th>
                            
							<th>Doctor Details</th>
                            
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{

						echo "<tr>
							<td>".$record["d_id"]."</td>
							<td>".$record["d_name"]."</td>
                            <td>".$record["d_gender"]."</td>
                            
                            <td>".$record["d_catergory"]."</td>
							
                            <td>".$record["d_details"]."</td>
							
						</tr>";
					}
					echo "</table>";
                    echo"<br>";
                    echo"Booking or More deatils Contact us  ";
                    echo"<a href='http://localhost/KandyEchannel/index.php#cont'>Click Contact Us</a>";
				}
				else
				{
					echo "Doctor DB could not be Found! ".mysqli_error($con);
				}
			}
			else{
				echo "Doctor DB could not be Found! ".mysqli_error($con);
			}
			
		?>