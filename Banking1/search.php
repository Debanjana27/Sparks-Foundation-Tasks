<?php
session_start();
?>
<?php
include('database.php');
$sid=$_GET['IIFSC'];
$sql="SELECT * FROM `customers_table` WHERE `IIFSC`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>MONEY2SEND</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/logo.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>
   
   <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
    
    <header id="header-part" class="header-four">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="main.html">
                                <img src="images/logo.png" alt="Logo">
                                <span ><u><p style="color:darkblue;padding-top: 40px;font-family: Georgia, serif;font-size: 50px">MONEY2SEND</p></u></span>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a href="customers.php">PAY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="rules.html">TRANSFER</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="about" href="about.html">DONATE</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="search-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- search form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Transfer safe<br> and easy</h2>
                        </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
<form method="POST" action="search.php">
	<table align="center" border="1" style="width: 70%; margin-top:40px">
	<tr>
	<th>Name</th>
	<td><input type="text" name="Name" value=<?php echo $data['Name']; ?> required></td>
	</tr>
    <tr>
	<th>Account number</th>
	<td><input type="text" name="Account Number" value=<?php echo $data['Account number']; ?> required></td>
	</tr> 
    <tr>
	<th>IIFSC</th>
	<td><input type="text" name="IIFSC" value=<?php echo $data['IIFSC']; ?> required></td>
	</tr> 
    <tr>
	<th>Email</th>
	<td><input type="text" name="Email" value=<?php echo $data['Email']; ?> required></td>
	</tr> 
	<tr>
	<th>Account balance</th>
	<td><input type="text" name="Balance" value=<?php echo $data['Account balance']; ?> required></td>
	</tr>
</table>

	 <table align="center" border="1" style="width: 70%; margin-top:150px">
	<form action="search.php" method="POST">
		<tr>
			<td align="center">Choose Reciever</td>
			<td><Select name="sem">
				<option value="0"></option>
				<option value="10001">Sambhabi Mishra</option>
				<option value="10002">Divyanshu Triphati</option>
				<option value="10003">Piyush</option>
				<option value="10004">Ayush Kumar</option>
				<option value="10005">Nikhil</option>
				<option value="10006">Rishu</option>
				<option value="10007">Gayatri Basak</option>
				<option value="10008">Amri</option>
				<option value="10009">Nikunj Malhotra</option>
				<option value="10010">Aru</option>
			</Select>
		</td>
		</tr>
		<tr>
			<td align="center">Enter Amount</td>
			<td><input type="text" name="amount" required="required"></td>
		</tr>
			<tr>
			<td colspan="1" align="center"></td>
			<td>
				<input type="submit" name="submit" value="Send Money"></td>
		</tr>
		<?php

	if(isset($_POST['submit']))
       {
  $sender=$_POST['IIFSC'];
  $reciever=$_POST['sem'];
  $balance=$_POST['Account balance']; 
  $amount=$_POST['Amount'];
  $ans1=$balance-$amount;
  $ans2=$balance+$amount;
  $qry="INSERT INTO `transaction_table`(`Sender IIFSC`, `Receiver IIFSC`, `Amount`) VALUES ('$sender','$reciever','$amount')";
  $qry1="UPDATE `customers` SET `Balance`='$ans1' WHERE `IIFSC`='$sender'";
  $qry2="UPDATE `customers` SET `Balance`='$ans2' WHERE `IIFSC`='$reciever'";

$run1=mysqli_query($con,$qry1);
$run2=mysqli_query($con,$qry2);
$run=mysqli_query($con,$qry);

  if($balance<$amount)
  {
   ?>
   <script>
   	alert("Not Sufficient Balance!!");
   	window.open("customers.php", "_self");
   </script>
   <?php
  }
  else
  {
  	?>
  	<script>
  	alert("Transfer Successful");
  	window.open("customers.php","_self");
  </script>
  <?php
  }
}
?>
</table>
</form>
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-about mt-40">
                            <p><b>YOUR SAFETY OUR CONCERN! SAFE WAY TO TRANSFER MONEY WHENEVER AND WHEREEVER.</b></p>
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="customers.php"><i class="fa fa-angle-right"></i>PAY</a></li>
                                <li><a href="about.html"><i class="fa fa-angle-right"></i>TRANSFER</a></li>
                                <li><a href="rules.html"><i class="fa fa-angle-right"></i>DONATE</a></li>    
                            </ul>
                            </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Our place, MONEY2SENDgroup</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+91 9876543210</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>MONEY2SENDxyz@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p>&copy; Copyrights 2020 MONEY2SEND All rights reserved. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                            <p>Designed by <span>MONEY2SEND</span> </p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>


<!-- Mirrored from wpsprite.com/html/edubin/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2019 16:00:21 GMT -->
</html>
