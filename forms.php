	<h2>One Form, Two Forms, Red Forms, Green Forms</h2>
	<h2>GET</h2>
	<form class="form" action="scripts/form_action.php" method="get">
		<input type="text" name="f_name" placeholder="First Name"><br>
		<input type="text" name="l_name" placeholder="Last Name"><br>
		<select name="genderget">
		  <option value="">Select...</option>
		  <option value="Mr.">Mr.</option>
		  <option value="Ms.">Ms.</option>
		  <option value="Mrs.">Mrs.</option>
		</select><br><br><br>
		<input class="btn" type="submit" value="Fetch!">
	</form>
	<br>
		
		<?php 

			session_start();

			if (isset($_SESSION['welcome']) && strlen($_SESSION['welcome']) > 25 ) {

				echo $_SESSION['welcome']; 
				
				//echo strlen($_SESSION['welcome']);
				
			}
			


			else{
				echo "GET values are empty";
			}

			unset($_SESSION['welcome']);

			/*

			if(!empty($_GET["f_name"]) && !empty($_GET["l_name"])) {
				echo "<h1>Welcome " . $_GET["f_name"] . "&nbsp;" . $_GET["l_name"] . "</h1>";
				
			}
			
			else {
				echo "Name values are Empty";
			} */
		?>	
<hr>

	<h2>POST</h2>
	<form class="form" action="scripts/form_action.php" method="post">
		<input type="text" name="f_name" placeholder="First Name"><br>
		<input type="text" name="l_name" placeholder="Last Name"><br>
		<select name="gender">
		  <option value="">Select...</option>
		  <option value="Mr.">Mr.</option>
		  <option value="Ms.">Ms.</option>
		  <option value="Mrs.">Mrs.</option>
		</select><br><br><br>

		<input class="btn" type="submit" value="Fetch!">
	</form>
	<br>	
		<?php
		/*
			$_POST = array();
			if ( !empty($_POST["f_name"]) && !empty($_POST["l_name"]) ) {  
	          	echo "<h1>Welcome " . $_POST["f_name"] . "&nbsp;" . $_POST["l_name"] . "</h1>";
	    			
	    	}	 
	   
	    	else {
	    		echo "Name values are empty";
	    	} */

	    	

			if (isset($_SESSION['welcome_post']) && strlen($_SESSION['welcome_post']) > 25 ) {

				echo $_SESSION['welcome_post'];

				
				
				//echo strlen($_SESSION['welcome_post']);
				
			}
			


			else{
				echo "POST values are empty";
			}

			unset($_SESSION['welcome_post']);

	    		
  		?>
<a id="bottom"></a>
  	