<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Java</title>
</head>
<body>
<?php
if(isset($_POST['editor'])) {
	$content = htmlspecialchars_decode($_POST['editor']);
	$name = htmlentities($_POST['className']);
	$name1 = $name;
	$name=$name.".java";
	$myfile = fopen("$name", 'w') or die("Unable to open file!");
	$msg=htmlspecialchars_decode($_POST['editor']);
	fwrite($myfile,$msg);
	$cmd1 = 'javac '.$name;
	$cmd2 = 'java '.$name1;
	
	$myfile1 = fopen("$name1".".bat", 'w') or die("Unable to open file!");
	$cmd = "
@echo on
cd C:\wamp\www\CC
$cmd1
exit
";
	echo "<pre>";
	fwrite($myfile1,$cmd);
	fclose($myfile1);
	echo shell_exec($name1.".bat");
	fclose($myfile);
	echo shell_exec($cmd2);
	//unlink($name);
	//unlink($name1.".class");
} else 
	echo "<center><h3 style='font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;'> Output Here </h3>";
?>
</body>
</html>