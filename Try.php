<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	$query1="select * from x; select * from y; select B from Q; ";
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
?>
</body>
</html>