<?php
//Linking the configuration file
require 'bsconfig.php';
?>





<html>
<head>
	<title>About Us-SOLO Music Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type = "text/css" href="styles/aboutus.css?v=<?php echo time(); ?>" >
	<link rel="stylesheet" type = "text/css" href="styles/Main.css?v=<?php echo time(); ?>" >
	<link rel="stylesheet" type = "text/css" href="styles/reports.css?v=<?php echo time(); ?>" >
</head>
</head>


<body>

<header>
		<video autoplay muted loop id="myVideo">
          <source src="images/SOLO MUSIC.mp4" type="video/mp4">
        </video>
		
		<!-- user account button -->
		<div >
          <button class="bttn1" type="button" id="btn1" onclick=""><a href="https://courseweb.sliit.lk/"><i style="font-size:24px" class="fa">&#xf2be;</i> User Account</a></button>
        </div>


       <!-- navbar -->
		<ul class="menu">
          <li class="menu"> <a href="home222.html"><i class="fa fa-fw fa-home"></i> HOME</a> </li>
          <li class="menu"> <a href="product.php"> PRODUCTS </a> </li>
          <li class="menu"> <a href="login.php">USER LOGIN </a> </li>
          <li class="menu"> <a href="register.php"> SIGN UP </a> </li>
          <li class="menu"> <a href="adminlogin.php"> ADMIN LOGIN  </a> </li>
          <li class="menu"> <a href="contact.html"> CONTACT US </a> </li>
          <li class="menu"> <a href="About us.php"> ABOUT US </a> </li>
        </ul>
        <!-- end navbar -->
  
	</header>
	
	
	<!--Create the table of the reports-->
	
	  <div class="form2">
	     <h2>Enter Daily Sales Details</h2>
	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Product Code :  <input type="text" name="Pcode"><br>
		Sales Volume :  <input type="text" name="Svol"><br>
		Total Profit :  <input type="text" name="totP"><br>
		
		<input type="submit" name="subbtn" value="SUBMIT DETAILS">
		
	<input type="submit" action="reportSub1.php" value="Report"></a>
		
		
		</form>
	  
	  </div>
	  
	  <!-- php-->
	  
	  <?php
if(isset($_POST["subbtn"])){
$Pcode= $_POST["Pcode"];
$Svol= $_POST["Svol"];
$totP= $_POST["totP"];


$sql= "INSERT INTO repdetails(prodCode,NumberOfSales,TotalProfit)VALUES('$Pcode','$Svol','$totP')";
if($con->query($sql)){
echo "Inserted successfully";
}
else{
echo "Error:". $con->error;
}
}

?>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--footer-->
	<footer>
		<div class="foot">
			<img class="footimage" src="images/foot.png">
			<div class="footer">


				<center>
					<p class="footcolor">Copyrights reserved @ 2021 SOLO Music Center.com</p>
					<a href="contactus.html">Privacy policy | Terms and conditions</a>
				</center>
			</div>
		</div>
	</footer>
    

	
	
	
	
	
	</body>
	</html>