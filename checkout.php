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


		<div id="insideheader">Checkout Page
		</div>
		<hr>
		
		
		<div id="maininfo">
        <div class="centretext"><p>Enter Your Billing Details: </p>
		
		<?php include_once('checkoutvalid.php'); ?>
		</div>
		<form action="" method="post">
		  <div id="tablenew">
		    <table style="auto">
			  <tr>
			  <td>First Name: </td><td><input type="text" name="fname" value="<?php if(isset($_SESSION['fname'])) {echo $_SESSION['fname'];}?>"/></td>  
			  </tr>
			  <tr>
			  <td>Last Name: </td><td><input type="text" name="sname" value="<?php if(isset($_SESSION['sname'])) {echo $_SESSION['sname'];}?>"/></td>
			  </tr>
			  <tr>
			  <td>Address: </td><td><textarea name="address" cols="25" rows="2"></textarea></td>
			  </tr>
			  <tr>
			  <td>Email: </td><td><input type="text" name="email" value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];}?>"/></td>
			  </tr>
			  <tr>
			  <td>Phone: </td><td><input type="text" name="phone" /></td>
			  </tr>
			  <tr>
			  <td>Delivery Method: </td><td>
			  <input type="radio" name="delivery" value="regular" checked>regular post
			  <input type="radio" name="delivery" value="courier">courier
			  <input type="radio" name="delivery" value="express">express courier
			  </td>
			  </tr>
			  <tr>
			  <td>Credit Card Number: </td><td><input type="text" name="creditcard" /></td>
			  </tr>
			  <tr>
			  <td>Expiry Date: </td><td>
			  <select name="monthexpiry">
			  <option>Jan</option>
			  <option>Feb</option>
			  <option>Mar</option>
			  <option>Apr</option>
			  <option>May</option>
			  <option>Jun</option>
			  <option>Jul</option>
			  <option>Aug</option>
			  <option>Oct</option>
			  <option>Nov</option>
			  <option>Dev</option>
			  </select>
			  <select name="yearexpiry">
			  <option>2014</option>
			  <option>2015</option>
			  <option>2016</option>
			  <option>2017</option>
			  <option>2018</option>
			  <option>2019</option>
			  <option>2020</option>
			  <option>2021</option>
			  </select>
			  
			  </td>
			  </tr>
			  <tr><td>Please Sign Me Up for Newsletters</td><td><input type="checkbox" name="newsletter"/></td>
			  </tr>
			  <tr>
			  <td>
			  <input type="hidden" name="checkoutsubmitted" value="1" />
			  <input type="reset" value="Reset"></td><td><input type="submit" ></td>
			 </tr>
		     </table>
		  </div><!-- main table -->
		</form>
        </div>
		
		

		
		
		
		
		
		
		

		<br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br>



</div> <!--End of main div -->
      <?php include_once('minicart.php'); ?>
      <div id="footer">
      <?php include_once('footer.php'); ?>
      </div>
</div><!-- END OF WRAPPER DIV -->

</body>

</html>