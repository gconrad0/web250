
<h2>Dynamic Text</h2>
<div class="dynamic-text-div">
<div class="profile-names">
<h3 class="sticky-header">Our Members</h3>
<ul>

<?php

$includedText = "text_files/member_profiles.txt";

$programRecords = fopen($includedText, "r");

$readInContents = fread($programRecords, filesize($includedText));

fclose($programRecords);

$aListOfSplitStuff = explode ("\n", $readInContents);

if (isset($_GET["n"])) {
	$pageDesired = $_GET["n"];
}


else {
	/*$firstRecord = $aListOfSplitStuff[0];
	$aListOfWords = explode("||", $firstRecord);
	$pageDesired = $aListOfWords[0]; */
	$pageDesired = "";
	$nameOfProfile = "Welcome!";
	$htmlOutput = "<br>Please select a name to view profile.";
	$profilePicture = "";
}

//echo "<h1>$pageDesired</h1>";

for ($i = 0; $i < sizeof($aListOfSplitStuff); $i++) {
	$currentRecord = $aListOfSplitStuff[$i];
	$aListOfWords = explode("||", $currentRecord);
	$theFirstWord = $aListOfWords[0];
	$theFirstWord_noSpaces = str_replace(' ', '', $theFirstWord);

	echo '<li><a href="?p=dynamic_text_improved.php&n=' . $theFirstWord_noSpaces . '#bottom">' . $theFirstWord . '</a></li>';

	if ($theFirstWord_noSpaces == $pageDesired) {
		
		$htmlOutput = "<br>Dog's Name: $aListOfWords[2]<br>Dog's Age: $aListOfWords[3]<br>Location: $aListOfWords[4]";	
		$nameOfProfile = $aListOfWords[0];
		$profilePicture = $aListOfWords[1];
	}
}
?>

</ul>
</div>

<div class="profile">
	<div><h3> <?php echo $nameOfProfile; ?> </h3>
		<p class="profile-content2"><?php echo $htmlOutput; ?> </p>
		<p class="profile-img"><?php echo $profilePicture; ?></p>
		</div>
</div>
</div>
<a id="bottom"></a>



<?php 
/*	for ($i = 0; i < sizeof($something); i++ ) {
		
	}
*/
?>