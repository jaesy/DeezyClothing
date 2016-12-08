<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Title here</title>

<style type="text/css">



</style>
</head>

<body>


<h1> Deezy Order List</h1><br>
<?php 

    //READING FROM A FILE 
    echo "<br><b>Customer Orders from the file</b><br>"; 
    $fp = fopen("deezyorders.txt","r"); 
    while (!feof($fp)) 
    { 
          $order= fgets($fp, 100); 
          echo $order."<br>"; 
    } 
    fclose($fp);
	
	
	?>





</body>

</html>