<!-- IT20661656-Sandeepani M.L. -->

<?php 
include("confing.php");
$result = mysqli_query($dbcon,"SELECT * FROM pHandling");//delete


?>


<?php
error_reporting("0");
if(isset($_POST['submit'])){
	//Get image name
	$image = $_FILES['image']['name'];
	//Get text
	$product_name= $_POST['product_name'];
	$product_type= $_POST['product_type'];
	$product_category= $_POST['product_category'];
	$manufact= $_POST['manufact'];
	$quantity= $_POST['quantity'];
	$price= $_POST['price'];

//image file directory
	$target = "images/".basename($image);
	//now insert query
	$sql = "INSERT INTO pHandling(image, product_name,product_type,product_category,manufact,quantity,price) values ('$image','$product_name','$product_type','$product_category','$manufact','$quantity','$price')";
	//excute query
	mysqli_query($dbcon,$sql);
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
	{
		$img = "image uploading successfully";
	}else{
		$img = "faild image uploading";
	}
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- imported style sheet for icon styles -->
    <link rel="stylesheet" type = "text/css" href="styles/Main.css?v=<?php echo time(); ?>" >
	<link rel="stylesheet" type = "text/css" href="styles/P_handling.css?v=<?php echo time(); ?>" >
	<title>Product Adding -Solo Music Center</title>
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





    
    <div class="titleText"><h1>Product Adding</h1></div>
         
               <form method="post" enctype="multipart/form-data">
                   <h5 class="alert-success"><?php if(isset($img)){ echo $msg;}?></h5>

                   <div class="input-group">
                   <label >Product Name:</label>
                   <input type="text"  data-size="sm" name="product_name">
               </div>     
               <div class="input-group">
                   <label >Product Type:</label>
                   <input type="text"  data-size="sm" name="product_type">
               </div>     
               <div class="input-group">
                   <label >Product Category:</label>
                   <input type="text"  data-size="sm" name="product_category">
               </div>   
               <div class="input-group">
                   <label >Manufactured By:</label>
                   <input type="text"  data-size="sm" name="manufact">
               </div>  
               <div class="input-group">
                   <label >Quantity:</label>
                   <input type="text"  data-size="sm" name="quantity">
               </div> 
               <div class="input-group">
                   <label >Product Price</label>
                   <input type="text"  data-size="sm" name="price">
               </div>              

                <div class="input-group">
                   <label >Product Image</label>
                   <input type="file"  data-size="sm" name="image">
                </div>



                   
                        <input   type="submit" class="pbtn" value="UPLOAD" name="submit">

                        <button style="width=50px; hight=5px;" class="pbtn2"><a href="viewProduct.php">VIEW PRODUCT LIST</a></button>

                   
               </form>
            
    

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