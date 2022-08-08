<!-- IT20661656-Sandeepani M.L. -->

<?php
include_once 'confing.php'; //link database link

//select all data from database
$result = mysqli_query($dbcon,"SELECT * FROM pHandling");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Admin- product details</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type = "text/css" href="styles/Main.css?v=<?php echo time(); ?>" >
    <link rel="stylesheet" type = "text/css" href="styles/P_handling.css?v=<?php echo time(); ?>" >
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

<div class="titleText"><h1>VIEW PRODUCT DETAILS</h1></div>

<!-- navigate to admin- add product page -->
<div >
    <button style="width=50px; hight=5px;" class="pbtn3"><a href="addProduct.php"> + ADD NEW PRODUCT</a></button>


            <table class="table">
                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product name</th>
                        <th>Product type</th>
                        <th>Product category</th>
                        <th>Manufactured By</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Product Image</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $query="SELECT* FROM pHandling" ;
                      $data=mysqli_query($dbcon,$query);

                      while($row=mysqli_fetch_array($data))  //loop to get all values from array
                      {

                     ?>

                     <!-- display database values  -->
                    <tr>
                        <td> <?php echo $row['id']?></td>
                        <td><?php echo $row['product_name']?></td>
                        <td><?php echo $row['product_type']?></td>
                        <td><?php echo $row['product_category']?></td>
                        <td><?php echo $row['manufact']?></td>
                        <td><?php echo $row['quantity']?></td>
                        <td><?php echo $row['price']?></td>

                        <td><img src ="images/<?php echo $row['image']; ?>" width="80px" height="100px"></td>
                        
                        <!-- Data delete button -->
                        <td><button class="pbtn1"><a href="delete-process.php? id=<?php echo $row['id']; ?>">DELETE</a></button></td>

                        <!-- Data update button -->
                        <td><button class="pbtn2"><a href="update-process.php?id=<?php echo $row["id"]; ?>">UPDATE</a></button></td>

                    </tr>
                <?php } ?>
                </tbody>
                
            </table>
        
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