<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PL/SQL SQL | CC</title>
</head>
<body>

<?php
if(isset($_POST['editor'])) {
	$name = (rand()*100+1);
	$name="temp_".$name.".sql";
	$myfile = fopen("$name", 'w') or die("Unable to open file!");
	$msg=htmlspecialchars_decode($_POST['editor']);
	if(substr($msg,-1) != '/') {
		$msg .= '
		/'; 
	}
	fwrite($myfile,$msg);
	echo "<pre>";
	echo shell_exec('sqlplus system/root @'.$name);
	fclose($myfile);
	unlink($name);
} else 
	echo "<center><h3 style='font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;'> Output Here </h3>";
?>
</body>
</html>
