<?php include 'Database_Connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration-SOLO Music Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  href="styles/registration.css" >
	<link rel="stylesheet"  href="styles/Main.css" >
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
	<!-- slideshow -->
    <div class="dex">


      <div class="mySlides fade">
        <img src="images/slide 1.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="images/slide 2.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="images/slide 3.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="images/slide 4.jpg" style="width:100%">
      </div>
      <br><br>

      <!-- <div style="text-align:center"> -->
       <span class="dot"></span> 
       <span class="dot"></span> 
       <span class="dot"></span> 
       <span class="dot"></span> 
      </div>
    </div>
	<center>
	 <div id='login -form' class="login-page">
                
                    <div class="form-box" >
                        <div class="form">
                            <form class="login-form" action="Login.php" method="post">
                                <center><h1 class="main-heading">Login Form</h1></center>
				                <input type="text" name="username" placeholder="Email" >
				                <input type="password" name="password" placeholder="Password" >
				                <input type="submit" name="submit" >
				                <p class="message">Not Registered? <a href="Useraccount.php">Register</a></p>
				            </form>
                            
			             </div>
	                </div>
                </div>
				</center>


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
    

<script>
	// slideshow
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>