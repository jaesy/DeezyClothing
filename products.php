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


		<div id="insideheader">All Products
		</div>
		<hr>
		


		<div id="maintable">
		<table style="auto">
			<tr>
			  <td><!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/9/3/1/3/3803139/blackiris/image1xl.jpg -->
			  <a href="productsingle.php?p=p1"><div class="thumbpic"><img src="images/image1.jpg" alt=""></div></a><span class="proddescription"><?php echo $_SESSION['pricebook']['p1']['title'];?></span><br><span class="prodprice"> <?php printf ("$%.2f",$_SESSION['pricebook']['p1']['price']);?> </span></td> 		  
			  <td><!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/9/1/0/8/3948019/blue/image1xl.jpg  -->
			  <a href="productsingle.php?p=p2"><div class="thumbpic"><img src="images/image2.jpg" alt=""></div></a><span class="proddescription"><?php echo $_SESSION['pricebook']['p2']['title'];?></span><br><span class="prodprice"> <?php printf ("$%.2f",$_SESSION['pricebook']['p2']['price']);?> </span></td>
			  <td><!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/7/7/9/0/3600977/mazarineblue/image1xl.jpg -->
			  <a href="productsingle.php?p=p3"><div class="thumbpic"><img src="images/image3.jpg" alt=""></div></a><span class="proddescription"><?php echo $_SESSION['pricebook']['p3']['title'];?></span><br><span class="prodprice"> <?php printf ("$%.2f",$_SESSION['pricebook']['p3']['price']);?> </span></td>
			  </tr>
			<tr>
			  <td><!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/5/1/7/2/3692715/572trueblack/image1xl.jpg  -->
			  <a href="productsingle.php?p=p4"><div class="thumbpic"><img src="images/image4.jpg" alt=""></div></a><span class="proddescription"><?php echo $_SESSION['pricebook']['p4']['title'];?></span><br><span class="prodprice"> <?php printf ("$%.2f",$_SESSION['pricebook']['p4']['price']);?> </span></td>
			  <td><!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/3/2/6/1/3291623/coatedblue/image1xl.jpg -->
			  <div class="thumbpic"><img src="images/image5.jpg" alt=""></div><span class="proddescription">Jack & Jones Anti Fit Jeans</span><br><span class="prodprice">$118.83</span></td>
			  <td><!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/5/6/8/9/3329865/multi/image1xl.jpg -->
			  <div class="thumbpic"><img src="images/image6.jpg" alt=""></div><span class="proddescription">ASOS Africa Top </span><br><span class="prodprice">$71.30</span></td>
			</tr>
			<tr>
			  <td><!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/7/5/0/1/3841057/navy/image1xl.jpg -->
			  <div class="thumbpic"><img src="images/image7.jpg" alt=""></div><span class="proddescription">Glamorous Basket Ball Singlet</span><br><span class="prodprice">$31.69</span></td>
			  <td><!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/7/5/6/8/3978657/white/image1xl.jpg -->
			  <div class="thumbpic"><img src="images/image8.jpg" alt=""></div><span class="proddescription">Ichiban Cherub Singlet</span><br><span class="prodprice">$63.38</span></td>
			  <td><!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/3/1/9/6/3286913/blackwhite/image1xl.jpg -->
			  <div class="thumbpic"><img src="images/image9.jpg" alt=""></div><span class="proddescription">Kigu Panda Onesie</span><br><span class="prodprice">$99.03</span></td>
			</tr>
		</table>
</div><!-- main table -->



		
		
		
		
		
		

		<br><br><br><br><br><br><br>



</div> <!--End of main div -->
        <?php include_once('minicart.php'); ?>
       <div id="footer">
       <?php include_once('footer.php'); ?>
       </div>
</div><!-- END OF WRAPPER DIV -->

</body>

</html>