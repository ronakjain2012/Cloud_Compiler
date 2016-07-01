<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HTML</title>
</head>
<body>
<?php
if(isset($_POST['editor'])) {
	$content = htmlspecialchars_decode($_POST['editor']);
	echo $content;
} else 
	echo "<center><h3 style='font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;'> Output Here </h3>";
?>
</body>
</html>