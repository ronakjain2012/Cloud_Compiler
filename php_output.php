<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP</title>
</head>
<body>
<?php
if(isset($_POST['editor'])) {
	$name = (rand()*100+1);
	$name="temp_".$name.".php";
	$myfile = fopen("$name", 'w') or die("Unable to open file!");
	$msg=htmlspecialchars_decode($_POST['editor']);
	fwrite($myfile,$msg);
	include($name);
	fclose($myfile);
	unlink($name);
} else 
	echo "<center><h3 style='font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;'> Output Here </h3>";
?>
</body>
</html>