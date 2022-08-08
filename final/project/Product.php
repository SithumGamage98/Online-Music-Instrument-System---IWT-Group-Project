<!-- IT20661656-Sandeepani M.L. -->

<?php 
include("confing.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product/Services-Solo Music Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- imported style sheet for icon styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type = "text/css" href="styles/product.css?v=<?php echo time(); ?>" >
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
<!--       </div>
 -->    </div>



    <!-- head title -->

    <div class="titleText"><h1> OUR ALL PRODUCTS</h1></div>

    <!--Read  product data table -->
       <table >
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <!-- <th>ID</th> -->
                        <th>Product name</th>
                        <th>Product type</th>
                        <th>Product category</th>
                        <th>Manufactured By</th>
                        <th>Available Products</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                  <!-- Query for get data from database -->
                    <?php
                      $query="SELECT* FROM pHandling" ;  
                      $data=mysqli_query($dbcon,$query);

                      while($row=mysqli_fetch_array($data))  //loop for get data
                      {

                     ?>

                    <tr>

                        <!-- code for display image to product table  -->

                        <td><img src ="images/<?php echo $row['image']; ?>" width="200px" height="200px"></td>

                        
                        <!-- display table data by assigning database  value -->
                        <td><?php echo $row['product_name']?></td> 
                        <td><?php echo $row['product_type']?></td>
                        <td><?php echo $row['product_category']?></td>
                        <td><?php echo $row['manufact']?></td>
                        <td><?php echo $row['quantity']?></td>
                        <td><?php echo $row['price']?></td>


                        <!-- link button to payment page -->

                        <td><button class="pbtn1"><a href="Payment.php">BUY NOW</a></button></td>
                    </tr>
                <?php } ?>
                </tbody>
                
            </table>
      
            
    
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