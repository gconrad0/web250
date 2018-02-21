<?php
function fizzBuzz($divisor01, $divisor02, $maxNum, $word01, $word02) {
/*
$divisor01 = 3;
$divisor02 = 5;
$maxNum = 100;

$word01 = "Hound";
$word02 = "Dog";
*/

for ($i = 1; $i <= $maxNum ; $i++) {

	

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
		echo $i;
	}

	echo "<br>";
	

}

}
?>
<h2>Fizz Buzz 01</h2>
<p>This page uses a PHP <code>for</code> loop to show a word(s) depending on whether or not the loop counter meets specific criteria. The criteria is:</p>
	<ul>
		<li>The <code>for</code> loop should run 100 times.</li>
		<li>If the <code>for</code> counter number is divisible by 3, output the word "Fizz" or Hound".</li>
		<li>If the <code>for</code> counter number is divisible by 5, output the word "Buzz" Dog".</li>
		<li>If the <code>for</code> counter number is divisible by 3 AND 5, output both words.</li>
		<li>If none of the criteria is met, output only the <code>for</code> counter number.</li>
	</ul>

For more FUN, try <a id="text-link" href = "?p=fizzbuzz_yournum.php">Fizz Buzz - YOU Choose</a>!
<hr>
<div class="flex-container">
	<div class="flex-item">
	<p>Fizz Buzz</p>
	<?php
		fizzBuzz(3, 5, 100, "Fizz", "Buzz");
	?>
	</div>

	<div class="flex-item">
		<p>Branded Fizz Buzz</p>
		<?php
			fizzBuzz(3, 5, 100, "Hound", "Dog");
		?>
	</div>
</div>