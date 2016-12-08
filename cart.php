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


		<div id="insideheader">Cart
		</div>
		<hr>

		
		 <div id="maininfo">
		    <div id="tablenew">
			<table style="auto">
			  <tr>		
<?php	
		
if(isset($_SESSION['visit'])){





	$count =  $_SESSION['count'];
	
	
	
	
	
	
	
	
	echo'  
	
	<table class="tableclass">
	<tr>
    <th colspan="40">Your Shopping Cart: </th> 
   </tr>';
	
	

	
	echo '<tr>
	         <th colspan="5">Item No. </th>
	         <th colspan="20">Product Name </th>
			 <th colspan="8">Size </th>
			 <th colspan="5">QTY </th>
			 <th colspan="5">Price </th>
		 </tr>';
	

	
	    //calc total

	
	for ($i=1; $i<=$count; $i++){

	echo'<tr>';
    echo '<td colspan="5">'."$i".'</td>';
	$title1 = $_SESSION['cart'][$i]['title'];
	echo '<td colspan= "20">'.$title1.'</td>';
	echo '<td colspan= "8">'.$_SESSION['cart'][$i]['size'].'</td>';
	echo '<td colspan= "5">'.$_SESSION['cart'][$i]['qty'].'</td>';
	echo '<td colspan= "5">';
	printf("$%.2f",($_SESSION['cart'][$i]['price'])*($_SESSION['cart'][$i]['qty']));
	echo '</td>';	
	echo'</tr>';
    }
	
		echo '<tr>
	         <td colspan="40"> Total is: ';
			 
			 printf ("$%.2f",$_SESSION['cart']['total']);
		echo'</td></tr>';
	    echo '<tr>
	         <td colspan="20">
			 <form action="emptycart.php">
			 <input type="submit" value="Empty Cart"/>
			 </form>
			 </td>
			 
			 
			 
			 <td colspan="20">
			 <form action="checkout.php">
			 <input type="submit" value="Proceed to Checkout"/>
			 </form>
			 </td>
			 
			 </tr>';
	

	
	
	
	echo'</table>';




}
		
else{

  echo 'Empty Cart';
}		
		
		
		
		
?>
		
		     
			 </tr>
			 </table>
			 </div>
</div>			 
		
		
		
		



		
		
		
		
		<br><br><br><br><br><br><br><br>
	
		

</div> <!--End of main div -->
      <div id="footer">
      <?php include_once('footer.php'); ?>
      </div>
</div><!-- END OF WRAPPER DIV -->

</body>

</html>