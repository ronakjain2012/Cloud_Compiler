<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP</title>
</head>
<body>
<?php
if(isset($_POST['editor'])) {
	$name = (rand()*10+1);
	$name="temp_".$name.".php";
	$myfile = fopen("$name", 'w') or die("Unable to open file!");
	$msg=htmlspecialchars_decode($_POST['editor']);
	fwrite($myfile,$msg);
	include($name);
	fclose($myfile);
	unlink($name);
} else 
	echo "<center><h3> Output Here </h3>";
?>
</body>
</html>