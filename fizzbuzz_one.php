<h2>Fizz Buzz 01</h2>
<p>This page uses a PHP <code>for</code> loop to show a word(s) depending on whether or not the loop counter meets specific criteria. The critera is:</p>
	<ul>
		<li>The <code>for</code> loop should run 30 times.</li>
		<li>If the <code>for</code> counter number is divisible by 3, output the word "Hound".</li>
		<li>If the <code>for</code> counter number is divisible by 5, output the word "Dog".</li>
		<li>If the <code>for</code> counter number is divisible by 3 AND 5, output "Hound" and "Dog".</li>
		<li>If none of the critera is met, output only the <code>for</code> counter number.</li>
	</ul>

For more FUN, try <a id="text-link" href = "?p=fizzbuzz_yournum.php">Fizz Buzz - YOU Choose</a>!
<hr>
<div class="fizz-buzz">
<p>Away we go!</p>
<?php

$divisor01 = 3;
$divisor02 = 5;
$maxNum = 30;

$word01 = "Hound";
$word02 = "Dog";


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

?>

</div>