<?php


$lines = file("customers.txt");
$matchFound=false;


  for($i=0;$i<count($lines);$i++)
  {
    if ($i!=0) // skip first line
    {
      $line=trim($lines[$i]); // trim() removes whitespace at the ends of a string
      $cells=explode("\t",$line);
    
	
	
	
	    if ($cells[2]==$_POST['email'] && $cells[3]==$_POST['password'])
        {
            $matchFound=true;
            break;
        }


    }
  }

  
    if ($matchFound)
  {
    echo "<p>User found. Logging in ...</p>";
  } else {
    echo "<p>Name and Password combination not found.</p>";
  }
?>




?>



