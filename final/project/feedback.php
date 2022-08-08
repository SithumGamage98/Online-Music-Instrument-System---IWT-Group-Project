<?php
	include_once 'config/config.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/offer.css">
	</head>
	<body>

		<h2> Offers Products Hadeler</h2>
		<div class="profil">
		<img src="images/profile.png" alt="Trulli" width="200" height="300">
		</div>

		<div class="nav">
			<button class="pbtn"><a href="index.php">Home </a></button>
			<button class="pbtn"><a href="#">Feeback </a></button>
			<button class="pbtn"><a href="addItems.php">ADD Product </a></button>
			<button class="btn"><a href="adminlogout.php">Log Out</a></button>	 
		</div>
		<center>
		<div class="producData tbl" style="border-style: groove; border-color: DarkBlue">
			<table border="1" width="100%">
			<tr>
				<th class="coll">User Id</th>
				<th class="coll">user Name</th>
				<th class="coll">Email</th>
				<th class="coll">Mobile Number</th>
				<th class="coll">Description</th>
				

			</tr>
			<?php
			//Create database connection using config file
			include_once("config/config.php");
			
			//Feth all usrs data from users table
			$sql = "SELECT * FROM user_coment";
			$result = mysqli_query($mysql_db, $sql);
			
			// output data of each row
			if($result->num_rows > 0){
				
				while($row=$result->fetch_assoc()){
					echo"<tr>";
					echo"<td>".$row['user_cid']."</td>";
					echo"<td>".$row['user_cname']."</td>";
					echo"<td>".$row['user_cemail']."</td>";
					echo"<td>".$row['user_cnumber']."</td>";
					echo"<td>".$row['user_cdiscription']."</td>";
				  
				}
				
			}
			
			?>
			</table>
			
        </div>
              
	</body>
</html>