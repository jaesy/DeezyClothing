<?php




if(isset($_POST['checkoutsubmitted'])){







    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $address = $_POST['address'];
	
    $phone = $_POST['phone'];
	$pattern2 = '/^[0-9+]*$/';
	
    $creditcard = $_POST['creditcard'];
	$pattern3 = '/^\d{13,18}$/';
	
	
    $monthexpiry = $_POST['monthexpiry'];
    $yearexpiry = $_POST['yearexpiry'];
	
    $email = $_POST['email'];
    $pattern = '/^\S+@\S+\.\S+$/';

    //simple validation
	if ($fname == "") {
	 echo "- Fname cannot be blank<br>";	 
	}
	else {
	   $_SESSION['fname1'] = $fname;
	   $_SESSION['fname'] = $_SESSION['fname1'];
	}
	
	
	if ($sname == "") {
	 echo "- Sname cannot be blank<br>";
	}
	else {
	   $_SESSION['sname1'] = $sname;
	}
	
    if ($address == "") {
	 echo "- Address cannot be blank<br>";	 
	}
	else {
	   $_SESSION['address1'] = $address;
	}
	//regex validation
	if (preg_match($pattern, $email)) {
       $_SESSION['email1'] = $email;
      }

    else {
       echo "- $email is not valid email<br>";
    }
	//phone validation
	if (preg_match($pattern2, $phone)) {
       $_SESSION['phone1'] = $phone;
      }
    else {
       echo "- phone not valid, must contain only numbers with no spaces<br>";
    }
    //cc validation
	if (preg_match($pattern3, $creditcard)) {
       $_SESSION['creditcard1'] = $creditcard;
      }
    else {
       echo "- Card No. not valid, must contain 13-18 numbers<br>";
    }
	
	
		
	
	
	if (isset($_SESSION['fname1']) &&   isset($_SESSION['sname1']) && isset($_SESSION['address1']) 
	&& isset($_SESSION['email1']) 
	&& isset($_SESSION['phone1'])
	
	){
	  header("Location: orderconfirm.php");
	
	
	
	}
	else {
	
	 echo "Please enter the correct information and try again.";
	}
	
	
	

	
	
	}
	
	
?>