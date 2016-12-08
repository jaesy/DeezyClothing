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
		
		
    <?php
	$prodcode = $_GET['p'];
		
    ?>

	<div id="singleprodtable">
		<table style="auto">
			<tr>
			  <td><div id="largepic"><img src="<?php echo $_SESSION['pricebook'][$prodcode]['mainpic']?>" alt="Main Pic"></div></td>
			  </tr>
			<tr>
			  <td><div class="thumbpicmain"><img src="<?php echo $_SESSION['pricebook'][$prodcode]['thumb1']?>" alt="Main Pic"></div>
					<div class="thumbpicmain"><img src="<?php echo $_SESSION['pricebook'][$prodcode]['thumb2']?>" alt="Main Pic"></div>
					<div class="thumbpicmain"><img src="<?php echo $_SESSION['pricebook'][$prodcode]['thumb3']?>" alt="Main Pic"></div></td>
			</tr>

		</table>
	</div><!-- main table -->

	<div id="prodinfo">
		<div id="prodinfohead"><?php echo $_SESSION['pricebook'][$prodcode]['title']?></div>

	
	<hr>

		<div class="info">


			<?php echo $_SESSION['pricebook'][$prodcode]['list'];

			echo '<br>';

			echo $_SESSION['pricebook'][$prodcode]['aboutprod'];

			?>



		</div>


	</div>


	<div id="prodinfobottom"> 
		<div id="prodinfoheadprice"><b>
		
		
		<?php
		include_once('pricebook.php'); 
		printf ("$%.2f",$_SESSION['pricebook'][$prodcode]['price']);
		?>
		</b></div>
		<div class="info">In Stock:<br>
		Normally delivered within 2-5 business days
		
		
		
		
		<form  action="" method="post">
		<p>Select Size:
		<select name="size">
			<option>xsmall</option>
			<option>small</option>
			<option selected>medium</option>
			<option>large</option>
			<option>xlarge</option>
		</select>
		</p>
		
			<input type="hidden" name="pd1" value="1"/>
				
			Quantity: 
			<input type="text" name="qty" />
			<input type="hidden" name="submitted" value="1" />		
			<input type="hidden" name="visit" value="<?php echo $prodcode ?>"/>
			<input type="hidden" name="product" value="<?php echo $_SESSION['pricebook'][$prodcode]['title']?>"/>
			<input type="hidden" name="price" value="<?php echo $_SESSION['pricebook'][$prodcode]['price']?>"/>
			<input type="submit" name="submit" value="Buy"/>
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