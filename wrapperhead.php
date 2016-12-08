	<div id="wrapperhead">

		<div id="wrapperheadleft"> Welcome to Deezy. Inc. Clothing.
     
		</div>
			<div id="wrapperheadright">
			        <?php
				   session_start();
				   
				   	
		             include_once('pricebook.php');
		             


				   if( isset($_SESSION['email']) ) 
				   {
				      echo 'Logged in as '.$_SESSION['fname']; 
					  echo '. <a class="footlinks" href="logout.php">Log Out</a>';

					  
					  
					  foreach ($_SESSION['pricebook'] as $key => $value){
					      
						  $_SESSION['pricebook'][$key]['price'] = $_SESSION['pricebook'][$key]['price'] - (($_SESSION['discountperc'] / 100) * $_SESSION['pricebook'][$key]['price']); 
						 
                      }						  
					  
				    }
					
					else{
					
					echo '<a class="footlinks" href="login.php">Log In</a>';
					
					}
		            ?>   
			        
			<input type="text" name="searchbar" value="Search Site">
			<input type="submit" value="Go">

			</div>

	</div>