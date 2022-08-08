<!DOCTYPE html>
<html>
<head>
  <title>payment-SOLO Music Center</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type = "text/css" href="styles/payment.css?v=<?php echo time(); ?>" >
  <link rel="stylesheet" type = "text/css" href="styles/Main.css?v=<?php echo time(); ?>" >
  <title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
</head>
<body>
  <header>
    <video autoplay muted loop id="myVideo">
          <source src="images/SOLO MUSIC.mp4" type="video/mp4">
        </video>
    
    <!-- user account button -->
    <div>
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

  



    
  <div class="box">

  <div class="card">
  <img src="images/Profile1.png" alt="Nayana" style="width:25%">
  <h3>Nayana Kumari</h3>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
</div>

  <div class="w3-container">
      <div class="w3-bar w3-black">
        <a href="https://courseweb.sliit.lk/" class="w3-bar-item w3-hover-green">Purchase etails</a>
        <a href="https://courseweb.sliit.lk/" class="w3-bar-item w3-hover-green">View Payment Details</a>
        <a href="https://courseweb.sliit.lk/" class="w3-bar-item w3-hover-green">Manage Daily Report</a>
        <a href="https://courseweb.sliit.lk/" class="w3-bar-item w3-hover-green">Read Message</a>
      </div>
      <br>
  </div>
   

  <div class="w3-container">
  
  <table class="w3-table-all">
  <thead>
      <tr class="w3-light-grey">
        <th>Full Name</th>
        <th>Date</th>
        <th>Email</th>
        <th>Address1</th>
        <th>Address2</th>
        <th>City</th>
        <th>Country</th>
        <th>Number</th>
        <th>Product ID</th>
        <th>Card Type</th>
        <th>Card Number</th>
        <th>CVC</th>
        <th>Owner</th>
        <th>Card Expiry Date</th>

      </tr>
      </thead>
      <?php include "db.php";

$query = "select * from payment";
$select_payment = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_payment)) {
    $FullName = $row['FullName'];
    $date = $row['date'];
    $Email= $row['Email'];
    $Address1 = $row['Address1'];
    $Address2= $row['Address2'];
    $City = $row['City'];
    $fileds= $row['fileds'];
    $Number = $row['Number'];
    $ProductID = $row['ProductID'];
    $pay= $row['pay'];
    $cNumber = $row['cNumber'];
    $CVC= $row['CVC'];
    $owner = $row['CVC'];
    $acdate= $row['acdate'];

     echo "<tr>";
     echo "<td>$FullName</td>";
     echo "<td>$date</td>";
     echo "<td>$Email</td>";
     echo "<td>$Address1</td>";
     echo "<td>$Address2</td>";
     echo "<td>$City</td>";
     echo "<td>$fileds</td>";
     echo "<td>$Number</td>";
     echo "<td>$ProductID</td>";
     echo "<td>$pay</td>";
     echo "<td>$cNumber</td>";
     echo "<td>$CVC</td>";
     echo "<td>$owner</td>";
     echo "<td>$acdate</td>";  
     echo "</tr>";
}

 ?>            
</tbody>
</table>
</div>
</div>

  
    <!--footer-->
  <footer>
    <div class="foot">
      <img class="footimage" src="images/foot.png">
      <div class="footer">


        <center>
          <p class="footcolor">Copyrights reserved @ 2021 SOLO Music Center.com</p>
            <p class="footcolor"><a href="contactus.html">Privacy policy | Terms and conditions</a></p>
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