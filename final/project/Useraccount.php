<!DOCTYPE html>
<?php include("Database_Connection.php");?>
<html>
<head>
	<title>Useraccount-SOLO Music Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  href="styles/useraccount.css?v=<?php echo time(); ?>" >
	<link rel="stylesheet"  href="styles/Main.css?v=<?php echo time(); ?>" >
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


			<div class="box">
	        <form name="regform" method="post">
	        <center>
	        <div class="profile">
				<img src="images/profile1.png">
	        </div>
				<input type="file" name="" id="file" accept="image/*">
				<label for="file">EDIT PIC</label>				
				<input type="text" id="name" name="name" placeholder="Enter Your Name">
				<input type="text" name="email" placeholder="Email">
				<input type="text" name="phone" placeholder="PHONE NUMBER">
				<input type="text" name="dob" placeholder="Date of Birth">
				<input type="text" name="password" placeholder="Password">
				<input type="text" name="confirm" placeholder="Confirm Password">
				<input type="text" name="" placeholder="GENDER">
				
				<center> <button type="submit" name="submit" >Register</button></center>
           </center>
            </form>
            
            			
			<?php
            if(isset($_POST['submit']))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $dob = $_POST['dob'];
                $password = $_POST['password'];
                $con_password = $_POST['confirm'];
                
        $INSERT_QUEARY = "insert into users(name,email,phone,dob,password)";
        $INSERT_QUEARY.= "VALUES('{$name}','{$email}','{$phone}','{$dob}','{$password}')";
          
        if ($name==""||$email==""||$phone==""||$dob==""||$password=="")
        {
            $msg = "Register Details fields cant be empty.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        else if($password !=$con_password)
        {
            $msg = "password and confirm password must be same.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        
        else
        {
                

        $Insert_User = mysqli_query($conn, $INSERT_QUEARY);
                $msg = "User Details Insert Succesfully.... ";
        echo "<script type='text/javascript'>alert('$msg');</script>";

        if(!$Insert_User)
        {
            die(" Details Insert can't Added to Databas....." . mysqli_error($conn));
        }
        }}
                
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

    </div>         
</body>
</html>