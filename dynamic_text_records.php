
<h2>Dynamic Text</h2>
<div class="dynamic-text-div">
<div class="profile-names">
<h3 class="sticky-header">Our Members</h3>
<ul>

<?php

$file = fopen("text_files/people_list.txt", "r");

while (!feof($file) ) {
	
	$line_of_text = fgets($file);
	
	$profile_array = explode('||', $line_of_text);
	
	$profile_array = array_filter(array_map('trim', $profile_array));
	
	echo "<li><a href='?i=$profile_array[1]&n=$profile_array[0]&p=dynamic_text_records.php#bottom'>$profile_array[0]</a></li>";
}

if (empty($_GET["i"])) {
	$_GET["i"] = "<br>Please select a name on the left.";
}

if (empty($_GET["n"])) {
	$_GET["n"] = "Welcome!";
}

$profile_name = $_GET["n"];

$profile = $_GET["i"];

fclose($file);

?>

</ul>
</div>

<div class="profile">
	<div><h3> <?php echo $profile_name; ?> </h3>
		<p class="profile-content"><?php echo $profile; ?> </p>
		</div>
</div>
</div>
<a id="bottom"></a>



<?php 
/*	for ($i = 0; i < sizeof($something); i++ ) {
		
	}
*/
?>