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
			<button class="pbtn"><a href="#">Home </a></button>
			<button class="pbtn"><a href="feedback.php">Feeback </a></button>
			<button class="pbtn"><a href="addItems.php">ADD offer Product </a></button>
			<button class="btn"><a href="adminlogout.php">Log Out</a></button>	 
		</div>
		<center>
		<div class="producData tbl" style="border-style: groove; border-color: DarkBlue">
			<table border="1" width="100%">
			<tr>
				<th class="coll">Item ID</th>
				<th class="coll">Item Name</th>
				<th class="coll">Item Code</th>
				<th class="coll">Description</th>
				<th class="coll">Price</th>
				<th class="coll">Quantity</th>
				<th class="coll">Update</th>

			</tr>
			<?php
			//Create database connection using config file
			include_once("config/config.php");
			
			//Feth all usrs data from users table
			$sql = "SELECT * FROM item";
			$result = mysqli_query($mysql_db, $sql);
			
			// output data of each row
			if($result->num_rows > 0){
				
				while($row=$result->fetch_assoc()){
					echo"<tr>";
					echo"<td>".$row['Item_id']."</td>";
					echo"<td>".$row['Item_name']."</td>";
					echo"<td>".$row['Item_code']."</td>";
					echo"<td>".$row['Item_description']."</td>";
					echo"<td>".$row['Price']."</td>";
					echo"<td>".$row['Quantity']."</td>";
				    echo"<td><a href='edit.php?id=$row[Item_id]'>Edit</a> | <a href='delete.php?id=$row[Item_id]'>Delete</a></td>";
					echo"</tr>";
				}
				
			}
			
			?>
			</table>
			
        </div>
              
	</body>
</html>