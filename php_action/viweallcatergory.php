<?php
            require_once('connection.php');  
            $dbobj=new dbconnect();
	       $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT * FROM catergory;";
		
			$exec = mysqli_query($con,$query);

			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='table' border=1 width=100%>
						<tr>
							<th height=50px >Catergory ID</th>
							<th>Catergory Name</th>
							<th>Catergory Details</th>
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{

						echo "<tr>
							<td>".$record["c_id"]."</td>
							<td>".$record["c_name"]."</td>
							<td>".$record["c_details"]."</td>
							
						</tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "Catergory could not be Found! ".mysqli_error($con);
				}
			}
			else{
				echo "Catergory could not be Found! ".mysqli_error($con);
			}
			
		?>