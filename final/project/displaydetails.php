<?php
//Linking the configuration file
require 'bsconfig.php';

?>






<center>
		<div class="producData tbl" style="border-style: groove; border-color: DarkBlue">
			<table border="1" width="100%">
			<tr>
				<th class="coll">User Id</th>
				<th class="coll">user Name</th>
				<th class="coll">password</th>
				<th class="coll">date</th>
				
				

			</tr>
			<?php
			//Create database connection using config file
			include_once("config/config.php");
			
			//Feth all usrs data from users table
			$sql = "SELECT * FROM user_coment";
			$result = mysqli_query($con, $sql);
			
			// output data of each row
			if($result->num_rows > 0){
				
				while($row=$result->fetch_assoc()){
					echo"<tr>";
					echo"<td>".$row['id']."</td>";
					echo"<td>".$row['username']."</td>";
					echo"<td>".$row['password']."</td>";
					echo"<td>".$row['created_at']."</td>";
					
				  
				}
				
			}
			
			?>
			</table>
			
        </div>
            
        </div>
        
    </div>