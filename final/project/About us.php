<!-- IT20661656-Sandeepani M.L. -->

<!DOCTYPE html>
<html>
<head>
	<title>About Us-SOLO Music Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- imported style sheet for icon styles -->
	<link rel="stylesheet" type = "text/css" href="styles/aboutus.css?v=<?php echo time(); ?>" >
	<link rel="stylesheet" type = "text/css" href="styles/Main.css?v=<?php echo time(); ?>" >
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

        <!-- Box display -->
        
    <div class="box">
    	   <h3>ABOUT US</h3><br>
           SOLO Music’s legacy "We are a likeminded collective who are immensely passionate about what we do and we love music! We are also the island’s longest-running music store, approaching nearly a century in the business. Today, we offer the widest selection of musical instruments, professional audio equipment, home theatre systems, and audio accessories from the world’s leading brands. Complemented by a music store that is a veritable wonderland of sound, equipping amateur enthusiast and professional alike. The ‘Rhythm for Life’ banner is an association between the Yamaha Music Centre and Mike Audio. It is also a promise of exceptional quality, professional expertise, affordable pricing with something for everyone, and genuine enthusiasm that is equal parts love and excellence.
           <br><br>

           <h3>AWARDS</h3>
        
           <h4>2014</h4>
           <ul>
            <li>TASCAM 2014 Dealer of the Year</li>
            <li>Chauvet 2014 e-Commerce Dealer of the Year</li>
            <li>CAD 2014 Dealer of the Year</li>
            <li>Audix 2014 Top Retailer of the Year</li>
            <li>Hanser 2014 Dealer of the Year</li>
            <li>Moog 2014 Partner of the Year</li>
            <li>Nord 2014 Dealer of the Year</li>
            <li>2014 Bizrate Platinum Circle of Excellence</li>
           </ul>

    </div>
    <!--footer-->
	<footer>
		<div class="foot">
			<img class="footimage" src="images/foot.png">
			<div class="footer">


				<center>
					<p class="footcolor">Copyrights reserved @ 2021 SOLO Music Center.com</p>
					<a href="privacy.php">Privacy policy | Terms and conditions</a>
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