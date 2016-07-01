<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Batch</title>
</head>
<body>
<?php
if(isset($_POST['editor'])) {
	$content = htmlspecialchars_decode($_POST['editor']);
	$name = (rand()*100+1);
	$name1 = "temp_".$name;
	$name="temp_".$name.".bat";
	$myfile = fopen("$name", 'w') or die("Unable to open file!");
	$msg=htmlspecialchars_decode($_POST['editor']);
	fwrite($myfile,$content);
	echo "<per>";
	echo shell_exec($name);
	fclose($myfile);
	unlink($name);
} else 
	echo "<center><h3 style='font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;'> Output Here </h3>";
?>
</body>
</html>