<?php 

//unset($_GET);

$loc = "http://localhost/web250/toc.php?p=fizzbuzz_yournum.php#form_loc";
$ser = "http://students.cpcc.edu/~gconrad0/web250/toc.php?p=fizzbuzz_yournum.php#form_loc";
$rel = "../toc.php?p=forms.php";

header("location: ". $ser);

?>