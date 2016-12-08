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


		<div id="insideheader">Order Confirmation
		</div>
		<hr>
		
		
		<div id="maininfo">
        <div class="centretext">
		
		
		
<?php		










			$count =  $_SESSION['count'];
            echo 'Hi '.$_SESSION['fname'];
            echo', you have ordered:<br><br>';
			
			//for-loop
			for ($i=1; $i<=$count; $i++){

			echo $_SESSION['cart'][$i]['qty'];
	      	$title1 = $_SESSION['cart'][$i]['title'];
	        echo "   $title1    ";	 
            printf("$%.2f",($_SESSION['cart'][$i]['price'])*($_SESSION['cart'][$i]['qty']));
            echo "<br><br>";			
            }
			

			
			
			
			echo " Total is: ";
			printf ("$%.2f",$_SESSION['cart']['total']);
			echo "<br><br>";
			echo 'Address to ship is: '.$_SESSION['address1'].'<br>'; 
			
			$today = date("H:i, jS F");
		    echo "Order Completed on $today";
		
		

		$outputstring = $today."\t".$_SESSION['email1']."\t".$_SESSION['fname1']."\t".$_SESSION['sname1']."\t";
		
		
		  //writing to file
		 
		for ($i=1; $i<=$count; $i++){
		$title1 = $_SESSION['cart'][$i]['title'];
		    $qty = $_SESSION['cart'][$i]['qty'];
	        $outputstring .= $qty."\t".$title1."\t";
		
		
		}
		
		$total = $_SESSION['cart']['total'];
		$outputstring .= $total."\t".$_SESSION['address1']."\n";
		
		
		
		/*
		$date = date ("H:i, jS F");
		$name2 = $_SESSION['fname'];
		$outputstring = $date."\t"
		.$name2;
		*/
		
		$fp = fopen("deezyorders.txt", "a");
		if (!$fp) {echo " could not open file"; exit;}
		
		fwrite($fp, $outputstring);
		
		fclose($fp);
		
		echo "<br><br>Order has been written to file."."";
		
		
		
		
		
		
		
		
		
		
		
		
		
		?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		<form  action="finishedorder.php" method="post">
		
					<input type="submit" value="Continue"/>
		</form>
	
		</div>

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