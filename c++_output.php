<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>C++</title>
</head>
<body>
<?php
if(isset($_POST['editor'])) {
	$content = htmlspecialchars_decode($_POST['editor']);
	$name = (rand()*100+1);
	$name1 = "temp_".$name;
	$name="temp_".$name.".cpp";
	$myfile = fopen("$name", 'w') or die("Unable to open file!");
	$msg=htmlspecialchars_decode($_POST['editor']);
	fwrite($myfile,$msg);
	
	$cmd1 = 'mingw32-g++.exe -c C:\wamp\www\CC\\'.$name.' -o C:\wamp\www\CC\\'.$name1.'.o';
	$cmd2 = 'mingw32-g++.exe  -o C:\wamp\www\CC\\'.$name1.'.exe C:\wamp\www\CC\\'.$name1.'.o';
	
	$myfile1 = fopen("$name1".".bat", 'w') or die("Unable to open file!");
	$cmd = "
@echo off
cd C:\Program Files (x86)\CodeBlocks\MinGW\bin
$cmd1
$cmd2
";
	echo "<pre>";
	fwrite($myfile1,$cmd);
	fclose($myfile1);
	echo shell_exec($name1.".bat");
	unlink($name1.".bat");
	unlink($name1.".o");
	echo shell_exec($name1.".exe");
	fclose($myfile);
	unlink($name);
	unlink($name1.".exe");
} else 
	echo "<center><h3 style='font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;'> Output Here </h3>";
?>
</body>
</html>