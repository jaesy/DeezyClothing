<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Title here</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>
<?php

session_start();
session_destroy();




?>
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


		<div id="insideheader">Login
		</div>
		<hr>
		
     <p> You have been Logged Out!</p>
		
		
		
		
		
		
		

		<br><br><br><br><br><br><br>



</div> <!--End of main div -->
      <?php include_once('minicart.php'); ?>
      <div id="footer">
      <?php include_once('footer.php'); ?>
      </div>
</div><!-- END OF WRAPPER DIV -->

</body>

</html>