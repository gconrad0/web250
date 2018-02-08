<?php 

function date_mod() {
				date_default_timezone_set('America/New_York');
				echo "<p>Last modified: " . date ("D, F d Y h:i:s", getlastmod()). "</p>";

				}
				?>