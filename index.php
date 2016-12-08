<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Title here</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>

<div id="wrapper">
     <?php include_once('wrapperhead.php'); ?>

	<div id="header">


		<?php include_once('logo.php'); ?>


	</div>
	
	<div id="topbar">
    <?php include_once('topbar.php'); ?>
    </div> 
	 
	 <div id="sidemenu"><br>
     <?php include_once('sidemenu.php'); ?>
     </div>
	  
	  
	<div id="main"><!-- Main contents -->


		<div id="insideheader">Home
		</div>
		<hr>



		<div id="homeimages"><!-- Original image below sourced for educational purposes: https://s3.amazonaws.com/autismspeaks/email_assets/sevenly_april2013/AutismSpeaks_SevenlyApril_07.jpg -->
			<a href=""><div class="homepic"><img src="images/homewomens.jpg" alt=""></div></a>
			<a href=""><div class="homepic"><img src="images/homemens.jpg" alt=""></div></a>
			<a href="products.php"><div class="homepic"><img src="images/homeshopall.jpg" alt=""></div></a>
		</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
		


</div> <!--End of main div -->


     <?php include_once('minicart.php'); ?>
      <div id="footer">
      <?php include_once('footer.php'); ?>
      </div>
</div><!-- END OF WRAPPER DIV -->

</body>

</html>