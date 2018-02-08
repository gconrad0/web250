


<h2>Fizz Buzz - YOU Choose!</h2>

<p>This page uses a PHP <code>for</code> loop to show a word(s) depending on whether or not the loop counter meets the criteria YOU specify!</p>
	<ul>
		<li>The <code>for</code> loop will run the amount of times you specify in the first field.</li>
		<li>If the <code>for</code> counter number is divisible by Divisor 1, output Word 1.</li>
		<li>If the <code>for</code> counter number is divisible by Divisor 2, output Word 2.</li>
		<li>If the <code>for</code> counter number is divisible by Divisor 1 AND Divisor 2, output Word 1 and Word 2.</li>
		<li>If none of the critera is met, output only the <code>for</code> counter number.</li>

	</ul>
<hr>
<div class="fizz-buzz">

<a id="form_loc"></a>
	<form class="form-fizz" action="#form_loc" method="GET">
		<input name="p" value="fizzbuzz_yournum.php" hidden>

		<label class="required">How high would you like to count?</label><br>
		<input type="number" value="<?php if (isset($_GET['maxNum'])) { echo $_GET['maxNum']; }  ?>" name="maxNum" min="1" max="10000" required placeholder=" Enter a number 1 - 10,000"><br>
		<hr class="form-hr">
		<div class="form-div">	
			<label>Divisor 1</label>
			<label class="form-label">Word 1</label><br>	
			
			<input type="number" value="<?php if (isset($_GET['divisor01'])) { echo $_GET['divisor01']; }?>" name="divisor01" placeholder="Enter a number">
			<input class="form-input" type="text" value="<?php if (isset($_GET['word01'])) { echo $_GET['word01']; } ?>" name="word01" placeholder="Enter some text"><br>
		</div>
		<hr class="form-hr">
		<div class="form-div">	
			<label>Divisor 2</label>
			<label class="form-label">Word 2</label><br>
			
			<input type="number" value="<?php if (isset($_GET['divisor02'])) { echo $_GET['divisor02']; } ?>" name="divisor02" placeholder="Enter another number">
			<input class="form-input" type="text" value="<?php if (isset($_GET['word02'])) { echo $_GET['word02']; } ?>" name="word02" placeholder="Enter some more text"><br>
		</div>
		<br>
		<input class="btn" type="submit" value="GO!" name="submit_fizz">
		<span class="required">Required</span>
	</form>
	
	<a class="btn-clear" href="scripts/clear_form.php">Clear Form</a>
	<br>
	
	<br>

<?php

	if (isset($_GET['submit_fizz'])) {
	
		if ($_GET["divisor01"] == 0) {
			$divisor01 = 10001;
		}

		else {
			$divisor01 = $_GET["divisor01"];
		}

		if ($_GET["divisor02"] == 0) {
			$divisor02 = 10001;
		}

		else {
			$divisor02 = $_GET["divisor02"];
		}
	
	$maxNum = $_GET["maxNum"];

	$word01 = $_GET["word01"];
	$word02 = $_GET["word02"];

		for ($i = 1; $i <= $maxNum ; $i++) {
			echo $i . ". ";

			if ($i % $divisor01 == 0 && $i % $divisor02 == 0 ) {
				echo $word01 . " " . $word02;
			}

			elseif ($i % $divisor01 == 0) {
				echo $word01;
			}

			elseif ($i % $divisor02 == 0) {
				echo $word02;
			}

			else {
				echo "";
			}

			echo "<br>";	
		}

	}

	else  {
		echo "";
	}

?>
</div>



