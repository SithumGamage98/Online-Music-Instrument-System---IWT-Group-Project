<!-- IT20661656-Sandeepani M.L. -->


<?php
include_once 'confing.php';
if(count($_POST)>0) {
mysqli_query($dbcon,"UPDATE pHandling set id='" . $_POST['id'] . "', product_name='" . $_POST['product_name'] . "', product_type='" . $_POST['product_type'] . "', product_category='" . $_POST['product_category'] . "',manufact='" . $_POST['manufact'] . "', quantity='" . $_POST['quantity'] . "', price='" . $_POST['price']."'WHERE id='" . $_POST['id'] . "'");

$message = "Product Updated Successfully !!!";
}
$result = mysqli_query($dbcon,"SELECT * FROM pHandling WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Product Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type = "text/css" href="styles/Main.css?v=<?php echo time(); ?>" >
   <link rel="stylesheet" type = "text/css" href="styles/pUpdate.css?v=<?php echo time(); ?>" >

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







<!-- product data updating form -->

<form name="frmUser" method="post" action="">

<div style="color:red;"><?php if(isset($message)) { echo $message; } ?>
</div><br>

<!-- navigate to admin product details page -->
<div >
<button class="pbtn2"><a href="viewProduct.php">Product List</a></button>
</div>

             
               <div class="input-group">
                  <label>Product ID: </label>
                  <input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
                  <!-- not allowe to update product id -->
                  <input type="text" name="id"  value="<?php echo $row['id']; ?>" disabled>
               </div>

               <div class="input-group">
                   <label >Product Name:</label>
                   <input type="text"  data-size="sm" name="product_name" value="<?php echo $row['product_name']; ?>">
               </div>     
               <div class="input-group">
                   <label >Product Type:</label>
                   <input type="text"  data-size="sm" name="product_type" value="<?php echo $row['product_type']; ?>">
               </div>     
               <div class="input-group">
                   <label >Product Category:</label>
                   <input type="text"  data-size="sm" name="product_category" value="<?php echo $row['product_category']; ?>">
               </div>   
               <div class="input-group">
                   <label >Manufactured By:</label>
                   <input type="text"  data-size="sm" name="manufact" value="<?php echo $row['manufact']; ?>">
               </div>  
               <div class="input-group">
                   <label >Quantity:</label>
                   <input type="text"  data-size="sm" name="quantity" value="<?php echo $row['quantity']; ?>">
               </div> 
               <div class="input-group">
                   <label >Product Price</label>
                   <input type="text"  data-size="sm" name="price" value="<?php echo $row['price']; ?>">
               </div>              

                

           <input type="submit" name="submit" value="Submit" class="pbtn1">


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