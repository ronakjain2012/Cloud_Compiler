<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Saving File ... ! Code on Cloud </title>
<script>
</script>

<?php include ("include/functions.php");?>
</head>
<body class="main-body text-center">
<div class="col-lg-12 col-md-10">
	<div>
	<?php
		if(isset($_POST['fileType']) and isset($_POST['fileValue']) and isset($_POST['fileName'])) {
			$ext = normalizeString($_POST['fileExt']);
			$type = normalizeString($_POST['fileType']);
			$name = normalizeString($_POST['fileName']);
			$value = htmlspecialchars_decode($_POST['fileValue']);
			//$targetDir = getcwd();
			//echo $targetDir;
			if($type == $ext) {
				$fileName = $name.".".$ext;
				$myfile = fopen("$fileName", 'w') or die("Unable to save file!");
				$msg=htmlspecialchars_decode($value);
				if(fwrite($myfile,$msg)) {
					fclose($myfile);
					sleep(1);
					if(rename($fileName,"myfiles\\".$fileName)) {
						echo "<h1>File Saved !</h1>";
						if($type=="php" and $type=="PHP")
							echo "<input class='form-control' id='link' value='localhost/CC/PHP_Compiler.php?loadfile=".$fileName."'>";
						else if($type=="sql" and $type=="SQL")
							echo "<input class='form-control' id='link' value='localhost/CC/SQL_Compiler.php?loadfile=".$fileName."'>";
							echo "<input class='form-control' id='link' value='localhost/CC/plsql_Compiler.php?loadfile=".$fileName."'>";
						//unlink($fileName);
							echo "<script> document.getElementById('link').select(); </script>";
					} else {
						echo "Not Saved ! Error Occured !";
					}
				}
				
			}else {
				echo "Wrong Extention Given";
			}
		} else {
			echo "<h3> Input Missing. </h3>";
		}
	?>
    </div>
    </div>
</body>
</html>