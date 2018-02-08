
	<?php
		session_start();
		
		if (isset($_GET["f_name"]) || isset($_GET['l_name']) || isset($_GET['genderget'])) {

			$fName = $_GET["f_name"];
			$lName = $_GET["l_name"];
			
			$genderGet = $_GET['genderget'];

			$_SESSION['welcome'] = "<h1>Welcome, " . $genderGet . " " . $fName . "&nbsp;" . $lName . "</h1>";

			$loc = "http://localhost/web250/toc.php?p=forms.php";
			$ser = "http://students.cpcc.edu/~gconrad0/web250/toc.php?p=forms.php";
			$rel = "../toc.php?p=forms.php";
			header("location: ". $ser);
	 	

	 	}

	 	if (isset($_POST["f_name"]) || isset($_POST['l_name']) || isset($_POST['gender'])) {
	 		
			 
			$fNamePost = $_POST["f_name"];
			$lNamePost = $_POST["l_name"];
			
			$gender = $_POST['gender'];
 			

			$_SESSION['welcome_post'] = "<h1>Welcome, " . $gender . " " . $fNamePost . "&nbsp;" . $lNamePost . "</h1>";

			$loc = "http://localhost/web250/toc.php?p=forms.php#bottom";
			$ser = "http://students.cpcc.edu/~gconrad0/web250/toc.php?p=forms.php#bottom";
			header("location: ". $ser);

	 	}
/*
	 		if(isset($_POST['gender']) ) {
 				$gender = $_POST['gender'];

 				$_SESSION['gender_out'] = $gender;
	 		}
*/
	 ?> 
		

	


