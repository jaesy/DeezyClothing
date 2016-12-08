<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Title here</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script type="text/javascript">
<!-- // commence script hiding
function addOne()
{
	quantity.value++;
	total = quantity * 99.00;
	document.getElementByID("total").innerHTML = total;
	
}
function minusOne()
{
	quantity.value--;
}

function check()
{
	var x=document.forms["myForm"]["quantity"].value;
	if (quantity.value <= 0){
		alert("No Quantity Selected");
		return false;
    }
    else 
		quantity = quantity.value;
		productcode = productcode.value;
		alert(quantity + productcode);
		
		return true;
}
// end script hiding-->
</script>
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


		<div id="insideheader">Mens
		</div>
		<hr>
		
		

		


	<!-- Original images below sourced for educational purposes: http://images.asos-media.com/inv/media/9/3/1/3/3803139/blackiris/image1xl.jpg,
	http://images.asos-media.com/inv/media/9/3/1/3/3803139/image2s.jpg, http://images.asos-media.com/inv/media/9/3/1/3/3803139/image3s.jpg,
	http://images.asos-media.com/inv/media/9/3/1/3/3803139/image4s.jpg   -->
	<div id="singleprodtable">
		<table style="auto">
			<tr>
			  <td><div id="largepic"><img src="images/image1main.jpg" alt="Main Pic"></div></td>
			  </tr>
			<tr>
			  <td><div class="thumbpicmain"><img src="images/thumb1.jpg" alt="thumb1"></div>
					<div class="thumbpicmain"><img src="images/thumb2.jpg" alt="thumb2"></div>
					<div class="thumbpicmain"><img src="images/thumb3.jpg" alt="thumb3"></div></td>
			</tr>

		</table>
	</div><!-- main table -->

	<div id="prodinfo">
		<div id="prodinfohead">Wrangler Shirt Slim Fit Horse Print</div>

	
	<hr>

		<div class="info">


			<ul>
			<li>Made from 100% pure cotton</li>
			<li>Point collar</li>
			<li>Patch pocket</li>
			<li>Button placket</li>
			<li>Regular fit</li>
			</ul>

			<br>

			<em>ABOUT WRANGLER</em><br>
			Wrangler was designed by the Blue Bell Overall Company in 1947 that tested 13 pairs of prototype jeans and 
			introduced the Wrangler 13MWZ to American consumers. Originally a cowboy jean Wrangler grew to 
			be one of the defining American denim brands. Today Wrangler utilise their rich history to create 
			authentic jeans and clothing collections that call upon Wrangler's all-American spirit.



		</div>


	</div>


	<div id="prodinfobottom"> 
		<div id="prodinfoheadprice"><b>
		
		
		<?php
		include_once('pricebook.php'); 
		printf ("$%.2f",$_SESSION['pricebook']['p1']['price']);
		?>
		</b></div>
		<div class="info">In Stock:<br>
		Normally delivered within 2-5 business days
		
		
		
		
		
		<p>Select Size:
		<select>
			<option>xsmall</option>
			<option>small</option>
			<option selected>medium</option>
			<option>large</option>
			<option>xlarge</option>
		</select>
		</p>
		
		
				<form  method="post">
			Quantity: 
			<input type="text" name="prod1" />
			<input type="hidden" name="submitted" />
			<input type="submit" value="Buy"/>
			<!--Total: <?php include('minicart.php'); ?> -->
		</form>
		

		</div>

	</div>
	
	

		<br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br>
		<br><br>

</div> <!--End of main div -->
        <?php include_once('minicart.php'); ?>
        <div id="footer">
       <?php include_once('footer.php'); ?>
       </div>
</div><!-- END OF WRAPPER DIV -->

</body>

</html>