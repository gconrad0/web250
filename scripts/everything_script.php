<?php
	
	if (isset($_POST['submit'])) {
		$checkboxes_array = implode(' ', $_POST['otherpet_list']);
	
	//	$dogname = $_GET['dogname'];
	//$dogage = $_GET['dogage'];
		//$dogbirthday = $_GET['dogbirthday'];
	//	$dogsex = $_GET['dogsex'];
		if(!empty($_POST['otherpet_list'])) {
			// Counting number of checked checkboxes.
			$checked_count = count($_POST['otherpet_list']);
			echo "You have selected following ".$checked_count." option(s): <br/>";
			// Loop to store and display values of individual checked checkbox.
				foreach($_POST['otherpet_list'] as $selected) {
					echo $selected ."<br>";
				}					
		}
echo $checkboxes_array;
}
unset($_POST);		
?>