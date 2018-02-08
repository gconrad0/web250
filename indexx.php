<!DOCTYPE html>
<html lang = "en-us">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Beagle World</title>
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="styles/brand_style_dynamic.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	</head>
<body>
	<div class="main">
		<div class="menu">
			
			<ul class="nav">
				<li><a href = "indexx.php">Home</a></li> 
				<!--<li><a href = "?p=multipage_sites/superduper-php.com/alpha.php">Alpha</a></li>
				<li><a href = "?p=multipage_sites/superduper-php.com/bravo.php">Bravo</a></li>
				<li><a href = "?p=multipage_sites/superduper-php.com/charlie.php">Charlie</a></li>
				<li><a href = "?p=multipage_sites/superduper-php.com/delta.php">Delta</a></li>
				<li><a href = "?p=multipage_sites/superduper-php.com/echo.php">Echo</a></li> -->
			</ul>
			<div class="header">
				<a href= "indexx.php"><img class="beagle-header" src="images/beagle.png" alt="Beagle" width="50" height="91"></a>
				<h1 class="title">Beagle World</h1>
				
				<p class="tag-line"><i>A place for man's BESTEST friend!</i></p>
			</div>
		</div>
		<div class="toc">
			<h1 class="text-center text-brown">Table of Contents</h1>
			<ul class="toc-list">
				<li><a href="indexx.php">Home</a></li>
				<li>|</li>
				<li><a href="?p=contract_dynamic.php">Contract</a></li>
				<li>|</li>
				<li><a href="?p=brand.php">Brand Details</a></li>
				<li>|</li>
				<li><a href = "?p=multipage_sites/superduper-php.com/alpha.php">Alpha</a></li>
				<li>|</li>
				<li><a href = "?p=multipage_sites/superduper-php.com/bravo.php">Bravo</a></li>
				<li>|</li>
				<li><a href = "?p=multipage_sites/superduper-php.com/charlie.php">Charlie</a></li>
				<li>|</li>
				<li><a href = "?p=multipage_sites/superduper-php.com/delta.php">Delta</a></li>
				<li>|</li>
				<li><a href = "?p=multipage_sites/superduper-php.com/echo.php">Echo</a></li>


				

			</ul>
		</div>
		<hr>
		<div class="content">
			<?php
				$sPage = $_GET["p"];
				
				usleep(200000);
				
				if($sPage == "") {  $sPage = "default_toc.php"; }
				include($sPage);
				echo $sPage;
			?>
		</div>
		<div class="validate">
			<a href="http://validator.w3.org/check?uri=referer">
				<img src="images/valid-html5-yellow.gif"  alt="Valid HTML 5" 
				height="31" width="88" style="border:0px;" />
			</a>
			
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
	    		<img style="border:0;width:88px;height:31px" height="31" width="88" 
	    		src="images/vcss-yellow.gif"
	    		alt="Valid CSS!" />
	    	</a>
    	</div>
	</div>
	
<script src="scripts/fade.js"></script>
</body>
</html>