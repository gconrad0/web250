<!DOCTYPE html>
<html lang = "en-us">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Beagle World</title>
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oxygen:400,800,900" rel="stylesheet">		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="styles/brand_style_dynamic.css">
		<!-- jQuery CDN -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	</head>
<body>
	<div class="main">
		<div class="menu">
			<div class="nav">
			
			<!-- <ul class="nav">
				<li><a href = "toc.php">Home</a></li> 
				<li><a href = "?p=multipage_sites/superduper-php.com/alpha.php">Alpha</a></li>
				<li><a href = "?p=multipage_sites/superduper-php.com/bravo.php">Bravo</a></li>
				<li><a href = "?p=multipage_sites/superduper-php.com/charlie.php">Charlie</a></li>
				<li><a href = "?p=multipage_sites/superduper-php.com/delta.php">Delta</a></li>
				<li><a href = "?p=multipage_sites/superduper-php.com/echo.php">Echo</a></li> 
			</ul>-->
		</div>
			<div class="header">
				<a href= "toc.php"><img class="beagle-header" src="images/beagle.png" alt="Beagle" width="50" height="91"></a>
				<h1 class="title">Beagle World</h1>
				
				<p class="tag-line"><i>A place for man's BESTEST friend!</i></p>
			</div>
		</div>
		<div class="toc">
			<h1 class="text-center text-brown">Table of Contents</h1>
			<ul class="toc-list">
				<li><a href="toc.php">Home</a></li>
				<li>|</li>
				<li><a href="?p=contract_dynamic.php">Contract</a></li>
				<li>|</li>
				<li><a href="?p=brand.php">Brand Details</a></li>
				<li>|</li>
				<li><a href = "?p=forms.php">One Form, Two Form...</a></li>
				<li>|</li>
				<li><a href = "?p=fizzbuzz_one.php">Fizz Buzz 01</a></li>
				<li>|</li>
				<li><a href = "?p=fizzbuzz_yournum.php">Fizz Buzz - YOU Choose</a></li>
				<li>|</li>
				<li><a href = "?p=everything_form.php">Everything Form</a></li>
				<li>|</li>
				<li><a href = "?p=everything_form_method_toggle.php">More Fun Everything Form</a></li>
				<li>|</li>
				<li><a href = "?p=dynamic_text_records.php">Dynamic Text</a></li>
				<li>|</li>
				<li><a href = "?p=dynamic_text_improved.php">Dynamic Text v2.0</a></li>
				<li>|</li>

			</ul>
		</div>
		<hr>
		<div class="content">
			
			<?php
				if(empty($_GET["p"])) {
					$_GET["p"] = "intro.php";
				}

				$sPage = $_GET["p"];

				usleep(200000);
				
				//if($sPage == "") {  $sPage = "intro.php"; }
				include($sPage);

			//	print_r (array_values($_GET));
			?>

		</div>
		<div class="small-height"></div>
		<div class="validate">
			<div class="last-modified">
				
				<?php 
				date_default_timezone_set('America/New_York');
				echo "<p>Site modified: " . date ("D, M d Y - h:ia", getlastmod()) . "</p>";
				?>

			</div>
			<a href="http://validator.w3.org/check?uri=referer">
				<img src="images/valid-html5-blue.gif"  alt="Valid HTML 5" 
				height="31" width="88" style="border:0px;" />
			</a>
			
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
	    		<img style="border:0;width:88px;height:31px" height="31" width="88" 
	    		src="images/vcss-blue.gif"
	    		alt="Valid CSS!" />
	    	</a>
	    	<div class="email">
	    		<a href="mailto:gconrad0@email.cpcc.edu">Email Me!</a>
	    	</div>
    	</div>
	</div>


<!--<script src="scripts/fade.js"></script> -->
</body>
</html>