<!DOCTYPE html>
<html>
<head>
	<title>payment-SOLO Music Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type = "text/css" href="styles/payment.css?v=<?php echo time(); ?>" >
	<link rel="stylesheet" type = "text/css" href="styles/Main.css?v=<?php echo time(); ?>" >
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
   

<?php include "db.php";
if (isset($_POST['PayNow'])) {

    $FullName = $_POST['FullName'];
    $date = $_POST['date'];
    $Email = $_POST['Email'];
    $Address1 = $_POST['Address1'];
    $Address2 = $_POST['Address2'];
    $City = $_POST['City'];
    $fileds = $_POST['fileds'];
    $Number = $_POST['Number'];
    $ProductID = $_POST['ProductID'];
    $pay = $_POST['pay'];
    $cNumber = $_POST['cNumber'];
    $CVC = $_POST['CVC'];
    $owner = $_POST['owner'];
    $acdate = $_POST['acdate'];

        $query = "insert into payment(FullName,date,Email,Address1,Address2,City,fileds,Number,ProductID,pay,cNumber,CVC,owner,acdate) ";
        $query .= "values ('{$FullName}','{$date}','{$Email}', '{$Address1}','{$Address2}', '{$City}','{$fileds}', '{$Number}', '{$ProductID}', '{$pay}','{$cNumber}', '{$CVC}','{$owner}', '{$acdate}')";
        $result = mysqli_query($connection, $query);

        $msg = "Paymet Added Successfully";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("refresh:0; url=Payment.php");

        if (!$result) {
            die('Query Failed' . mysqli_error($connection));
        }
    }
?>
   
   
    <div class="box">
    
        <div calss="wrapper">
        <h2>Payment Detils</h2>
        <form method="POST">
          
           
           <div class="input-group">              
              <div class="input-box">
                  <input type="text" name="FullName"
                  placeholder="Full Name" required
                  class="name">
               </div>
             </div> 

             
            <div class="input-group">
              <div class="input-box">
                  <h4>Date Of Birth</h4>
                  <input type="date" name="date" class="form-control" placeholder="Date" required>
              </div>
            </div>

            <div class="input-group">
              <div class="input-box">
                  <input type="Email" name="Email"
                  placeholder="Email" required
                  class="name">  
              </div>
            </div>

            <div class="input-group">
              <div class="input-box">
                  <input type="Address" name="Address1"
                  placeholder="street Address1" required
                  class="name">  
                  <i class="fa-home"></i>               
              </div>
            </div> 
      
            <div class="input-group">
              <div class="input-box">
                  <input type="Address" name="Address2"
                  placeholder="street Address2" required
                  class="name">                  
              </div>
            </div> 

            <div class="input-group">
              <div class="input-box">
                  <input type="City" name="City"
                  placeholder="City" required
                  class="name"> 
              </div>
            </div>

            
            
<div class="input-box">
   <label for="Fileds">Fileds:</label>
      <select name="fileds" id="Fileds">
        <option value="Sri lanka">Sri lanka</option>
        <option value="India">India</option>
        <option value="Japan">Japan</option>
        <option value="Ostralia">Ostralia</option>
        <option value="Pakiston">Pakiston</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Thailand">Thailand</option>
        <option value="Pilipeen">Pilipeen</option>
      </select>
</div>

            

            <div class="input-group">
              <div class="input-box">
                  <input type="Phone Number" name="Number"
                  placeholder="Phone Number" required
                  class="name">                 
              </div>
            </div> 

            
            <div class="input-group">
              <div class="input-box">
                  <input type="Product ID" name="ProductID"
                  placeholder="Product ID" required
                  class="name">                 
              </div>
            </div>
           
            <div class="input-group">
              <div class="input-box">
              <h4>Payment Details</h4>
                <select name="pay" id="pay">
                  <option value="Credit Card">Credit Card</option>
                  <option value="Paypal">Paypal</option>
                  </select>
            </div>
  </div>
            
            <div class="input-group">
              <div class="input-box">
                  <input type="tel" name="cNumber"
                  placeholder="Card Number" required 
                  class="name">                
              </div> 
            </div>

            <div class="input-group">
              <div class="input-box">
                  <input type="tel" name="CVC"
                  placeholder="Card CVC" required 
                  class="name">                
              </div> 
            </div>

            <div class="input-group">
              <div class="input-box">
                  <input type="tel" name="owner"
                  placeholder="Card Owner" required 
                  class="name">                 
              </div> 
            </div>
 
            <div class="input-box">
            <input type="date" name="acdate" class="form-control" placeholder="Date" required>
            </div>





           <div class="input-group">
              <div class="input-box">
                <button type="submit">Cancel</button>
                <button type="submit" Name="PayNow">Pay Now</button>
               </div>
           </div>       


          </form>
     </div>  
   
   </div>   

    
	
	
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