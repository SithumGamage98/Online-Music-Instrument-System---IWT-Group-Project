<?php
//Linking the configuration file
require 'bsconfig.php';

?>

<html>
<head>
<title>Product/Services-Solo Music Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type = "text/css" href="styles/product.css?v=<?php echo time(); ?>" >
	<link rel="stylesheet" type = "text/css" href="styles/Main.css?v=<?php echo time(); ?>" >
	<link rel="stylesheet" type="text/css" href="styles/productDetails.css?v=<?php echo time(); ?>">
	



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
	
	
	

	<form method="post" class="fom" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <h3>New Products Details </h3>
      Product Name :<input type="text" name="Pname" class="inm"><BR />
      Cetogory :<input type="text" name="Pcata" class="inm"><BR />
      ProductID : <input type="text" name="proID" class="inm"><BR />
      Quantity : <input type="text" name="Qua" class="inm"><BR />
      Color : <input type="text" name="Col" class="inm"><BR />
      Price : <input type="text" name="Pri" class="inm"><BR />


<input type="submit" value="Submit" name="btnSubmit" class="btn">

<button><a href="Admin.html">Back</a></button>

</form>




<?php
if(isset($_POST["btnSubmit"])){
$Pname= $_POST["Pname"];
$Pcata= $_POST["Pcata"];
$proID= $_POST["proID"];
$Qua= $_POST["Qua"];
$Col= $_POST["Col"];
$Pri= $_POST["Pri"];

$sql= "INSERT INTO music(Instrument,Cetegory,ProductID,Quantity,Color,price)VALUES('$Pname','$Pcata','$proID','$Qua','$Col','$Pri')";
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
