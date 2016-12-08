<?php
//session_start();

if( count($_POST) > 0 ) 
{
  $lines=file("customers.txt");
  for($i=0;$i<count($lines);$i++)
  {
    $cells=explode("\t", $lines[$i]);
	$cells[0] = trim($cells[0]);
	$cells[1] = trim($cells[1]);
    $cells[2] = trim($cells[2]); 
    $cells[3] = trim($cells[3]); 
    $cells[5] = trim($cells[5]); 
	$cells[6] = trim($cells[6]);
    if ($cells[2] == $_POST['email'] && $cells[4] == md5($_POST['password']))
    { 
      $_SESSION['email'] = $_POST['email'];
	  $_SESSION['fname'] = $cells[0]; 
	  $_SESSION['sname'] = $cells[1]; 
	  $_SESSION['phone'] = $cells[5]; 
	  $_SESSION['discountperc'] = $cells[6]; 
	  
	  
      header("Location: index.php");
    }
  }
}


if( !isset($_SESSION['email']) ) 
{ 
   echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>";
   echo (count($_POST) == 0) ? "" : "<p class='error'>User not found. Try Again.</p>";
    echo "
    <p>Email:<br/>
    <input type='text' name='email' value='' /></p>   
    <p>Password:<br/>
    <input type='text' name='password' value=''></p>
    <p><input type='submit' value='submit'></p>
    </form> ";
   
   
   
   
   

}

  

?>