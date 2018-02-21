<?php 

unset($_GET);
unset($_POST);

$local = "http://localhost/web250/toc.php?p=test_everything_form_gc.php";
$server = "http://students.cpcc.edu/~gconrad0/web250/test_everything_form_gc.php";
$relative = "../toc.php?p=forms.php";

header("location:" . $server);

?>