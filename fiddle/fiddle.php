<?php
//Simple string
$x = 'This is a string<br>';
print($x . '<br>');

//Mark days until wedding
$target = mktime(0, 0, 0, 5, 12, 2018);
$today = time();
print('Dates as integers. Date of my wedding: ' . $target . '.<br> Todays date: ' . $today); 

$difference = $target - $today;
print("<br>Difference as integer: $difference");

$days = (int) ($difference/86400);
print("<br>My wedding is in $days days.<br>");

//Math functions
$pie = pi();
print("Pi = $pie<br>");

$piesqrt = sqrt($pie);
print("Square root of pi = $piesqrt<br>");

//Repeating Strings
print(str_repeat($x, 5) . "");

print(strtotime($today));

print ("Formated date using date function: " . "<b>" . date("M/d/y", $today) . "</b><br>");

print ("String as html entity: " . htmlentities("$x") . "<br>");

$newString = substr($x, 3,10);
print("Subset of a string: $newString<br>");

//Prints all Sundays for 15 weeks
echo("<h3>Due dates for WEB-250</h3>");

$startdate=strtotime("Sunday");
$enddate=strtotime("+15 weeks", $startdate);

while ($startdate < $enddate) {
  echo (date("D M Y", $startdate) . "<br>");
  $startdate = strtotime("+1 week", $startdate);
}

//Math function
function simpleMath($num1, $num2, $num3) {
	$diff = ($num1 - $num2);
	$add = ($num1 + $num2 + $num3);
	$average = ($add / 3);
	$multiply = ($num1 * $num2 * $num3);

	print("<p><b><span style='font-size:1.5em'>Simple Math function</span><br>
		Numbers Used: $num1, $num2, $num3</b><br>
		Difference of first two numbers = $diff<br>
		Sum = $add<br>
		Average = $average<br> Multiply = $multiply<br></p>");
}

simpleMath(3,6,12);
simpleMath(6,125,97856);

?>