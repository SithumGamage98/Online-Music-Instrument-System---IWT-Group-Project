<?php
	include_once 'config/config.php';
?>

<?php
	$name = $_POST["field1"];
	$code = $_POST["field2"];
	$price = $_POST["field3"];
	$qty = $_POST["field4"];
	$des = $_POST["field5"];

	$sql = "insert into item(Item_id,Item_name,Item_description,Price,Quantity,Item_code)values('','$name','$des','$price','$qty','$code')";
	
	if(mysqli_query($mysql_db,$sql)){
		echo "<script>alert ('Record inserted successfully!!!')</script>";
		header("Location:index.php");
	}
	else{
		echo"<script>alert ('Error in inserted records')</script>";
	}
	
	mysqli_close($mysql_db);

?>	
