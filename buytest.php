<?php

//session_start();

if(isset($_POST['submitted'])){
   $_SESSION['visit'] = $_POST['submitted'];
}


if(isset($_SESSION['visit'])){
   // $_SESSION['cartopen'];
    if(isset($_POST['submit'])){
	$_SESSION['count']++;	
	
	//$count =  $_SESSION['count'];
	$_SESSION['cart'][$_SESSION['count']]['title'] =  $_POST['product'];
	$_SESSION['cart'][$_SESSION['count']]['price'] =  $_POST['price'];
	$_SESSION['cart'][$_SESSION['count']]['size'] =  $_POST['size'];
	$_SESSION['cart'][$_SESSION['count']]['qty'] =  $_POST['qty'];
	//calc subtotal	
    $_SESSION['cart']['total'] =($_SESSION['cart']['total']) + (($_SESSION['cart'][$_SESSION['count']]['qty']) * $_SESSION['cart'][$_SESSION['count']]['price'] );
	}




	
}
else{
$_SESSION['count'] = 0;
$_SESSION['cart']['total'] = 0;
}



?>