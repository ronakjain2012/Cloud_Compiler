<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title><script src="jquery/jquery-1.8.3.min.js"></script>

</head>
<body>
<?php
/*	$query1="select * from x; select * from y; select B from Q; ";
	$sec = $query1;
	$query2 = array();
	//echo substr_count($query1,";");
	$i=0;
	while($i !== substr_count($query1,";")) {
		
		$query2[$i] = substr($sec,0,strpos($sec,";")).";";
		
		//echo "<br/> substr :".substr($sec,0,strpos($sec,";"));
		//echo "<br/> Query :".$query2[$i];
		
		$sec = substr($sec,strpos($sec,";")+1);
		//echo "<br/> Query M :".$sec;
		$i++;
	}
	
	echo "<hr>";
	print_r($query2);
	echo "<hr>";
	echo strpos("Ronak Bok ar iaZ",'asdasdaasdasdasd')+1;
	echo "<br/>".strlen("Ronak Bok ar iaZ");
	echo "<hr>";
	echo strpos($query1,"y");echo "<hr>";echo "<hr>";
	print_r(str_replace("select * from y","select * from FUCK",$query1,$i));
	echo "<hr>";echo "<hr>";
	echo substr("select * from",0,6);
	
	
	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

*/


/*
$html_code = " 
<html> 
<head> 
 <title>My test title</title> 
 <style> 
 body { 
 font-family:verdana; 
 font-size:11px; 
 color:black 
 } 
 </style> 
</head> 
<body> 
 this is the body 
</body> 
</html>"; 

# Create the image 
try{
 $img = @imagecreate("300", "600") or die('cant'); 
 imagecolorallocate($img,0,0,0); 
 $c = imagecolorallocate($img,70,70,70); 
 imageline($img,0,0,300,600,$c2); 
 imageline($img,300,0,0,600,$c2); 

$white = imagecolorallocate($img, 255, 255, 255); 
imagettftext($img, 9, 0, 1, 1, $white, "VERDANA.TTF", $html_code); 

# Display the image 
header("Content-type: image/jpeg"); 
imagejpeg($img); 
} catch(Exception $e) {
}

*/

?>

<div>
</div>
<iframe id="iframe1" src="http://ums.lpu.in/lpuums/" width="100%" height="400"></iframe>
<button id="x"> h </button>
<script type="text/javascript">

$('#x').click(function(){
 alert($('#iframe1').contents().find('#lblUserName').val())	
	});
//var a = document.getElementById("idframe").contentWindow.document.getElementById("idelement").value;
//alert(a);

</script>

<?php 
	
$to       = "ronakjain2012@gmail.com";
$subject  = "Testing send mail techniques";
$message  = "Hi, you just received an email using sendmail!";
$headers  = "From: ronakjain2012@gmail.com";
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
	
	
	/*
	
	$directory = getcwd();
    $i = 1;
    $directory = $directory;
    if ($handle = opendir($directory)) { 
        while (true == ($file = readdir($handle))) {
            if($file=="." || $file==".." || $file=="index.php") {
                continue;
            }
      }
       
    $i=1;
    $directory = $directory;
           
    if ($handle = opendir($directory)) {
        while (true == ($file = readdir($handle))) {
            if($file=="." || $file==".." || $file=="index.php") {
                continue;
            }
            $replace = $_POST['name'].$i.".mkv" ; 
            
            rename($directory.$file,$directory.$replace);
            echo $directory.$file."<br>";
            $i++;
        }   
    closedir($handle);            
            
    } 
    } */
	$fileName = $_GET['loadfile'];
	
		$filen = 'myfiles\\'.$fileName;
	echo $filen;
	echo file_exists("include\\");
?>
<form action="" method="POST" >
<input type="text" name="name" />
<input type="text" name="directory" />
<input type="submit" name="Go" />
</form>

</body>
</html>