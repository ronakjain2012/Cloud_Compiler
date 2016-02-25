<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<form action="index.php" method="post" >
<textarea name="CCtext" type="text"></textarea> 

<input name="s2b" type="submit" value="Convert to Binary">

<input name="b2s" type="button" value="Convert to Text">

<?php
	$flag = 0;
	if(isset($_POST['s2b']))
	{
		echo "<br>";
		$str = $_POST['CCtext'];
		if(strlen($str)==0)
		{
			$flag = 1;
		}
		else
		{
			$i=0;
			$j = 0;
			$unic=0;
			while($i<strlen($str))
			{
				//$str = str_split($str);
				$single = $str[$i];
				$ascii = ord($single);
				echo "single: ".$single;
				echo "<br>ASCII code for ".$single." is: ".$ascii."<br>";		 
				$j=0;
				echo "<br>Binary Calculation: <br>";
				while($ascii>0)
				{
					$rem=$ascii%2;
					$ascii=$ascii/2;
					$ascii = floor($ascii);
					$bin[$j]=$rem;
					$j++;
				}
				echo "\nBinay code is: ";
				$k=0;
				$universal[$unic++] = 0;
				$A=NULL;
				for($k=$j-1;$k>=0;$k--)
				{
					$A .= $bin[$k];
					$universal[$unic]=$bin[$k];
					$unic++;
				}
				
				if(strlen($A) == 7 ) {
					$A=str_pad($A,8,'0',STR_PAD_LEFT); 
				}
				echo $A."<br>";
				
				$i++;
			}
			echo "\nWhole data in binary form: ";
			for($k=0;$k<$unic;$k++)
			echo $universal[$k];
		}
		if($flag == 1)
			echo "wrong input";
	}
	?>

</form>
</body>
</html>
