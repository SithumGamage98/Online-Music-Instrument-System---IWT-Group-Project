<?php
	include_once 'config/config.php';
?>

<?php
	$cname = $_POST["contact1"];
	$cemail = $_POST["contact2"];
	$cnumber = $_POST["contact3"];
	$cdes = $_POST["contact4"];
	

	$sql = "insert into user_coment(user_cid,user_cname,user_cemail,user_cnumber,user_cdiscription)values('','$cname','$cemail','$cnumber','$cdes')";
	
	if(mysqli_query($mysql_db,$sql)){
		echo "<script>alert ('Record inserted successfully!!!')</script>";
		header("Location:Contact.html");
	}
	else{
		echo"<script>alert ('Error in inserted records')</script>";
	}
	
	mysqli_close($conn);

?>	