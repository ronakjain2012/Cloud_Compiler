<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SQL</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
	$query = null;
	if(isset($_POST['editor'])) {
		
		include_once('DB.php');
		/*$host = "localhost";
		$user_name = "root";
		$user_pwd = "root";
		$db= "test";
		$con = new MySQLi($host,$user_name,$user_pwd);*/
		$db = Database::getInstance();
		$con = $db->getConnection();
		$query1 = $_POST['editor'];
		if(substr($query1,-1) !== ';') {
		$query1.=";";
		}
		$query1=sql_split(htmlspecialchars_decode($query1));
		
		$query_count = 0;
		if($con->errno) {
			echo "Connection Error";
		} else {
			if(1){
				$query = htmlspecialchars_decode($_POST['editor']);
				
				// single Query 
				while($query_count != count($query1)) {
					$current_query = trim(strtolower($query1[$query_count]));
					$match = 0;
					//switch($current_query) {
					if (strpos($current_query,"create") >= $match) { 
						$temp = substr($current_query,0,6);
						if($temp === "create") {
						single_query("create",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"alter") >= $match) { 
						$temp = substr($current_query,0,5);
						if($temp === "alter") {
						single_query("alter",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"modify") >= $match) { 
						$temp = substr($current_query,0,5);
						if($temp === "modify") {
						single_query("modify",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"drop") >= $match) {
						$temp = substr($current_query,0,4);
						if($temp === "drop") {
						single_query("drop",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"insert") >= $match) {
						$temp = substr($current_query,0,6);
						if($temp === "insert") {
						single_query("insert",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"update") >= $match) {
						$temp = substr($current_query,0,6);
						if($temp === "update") {
						single_query("update",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"delete") >= $match) {
						$temp = substr($current_query,0,6);
						if($temp === "delete") {
						single_query("delete",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"alter user") >= $match) {
						$temp = substr($current_query,0,10);
						if($temp === "alter user") {
						single_query("alter user",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"set password") >= $match) {
						$temp = substr($current_query,0,12);
						if($temp === "set password") {
						single_query("set password",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"set authentication_string") >= $match) {
						$temp = substr($current_query,0,25);
						if($temp === "set authentication_string") {
						single_query("set authentication_string",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"flush privileges") >= $match) {
						$temp = substr($current_query,0,16);
						if($temp === "flush privileges") {
						single_query("flush privileges",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"grant") >= $match) { 
						$temp = substr($current_query,0,5);
						if($temp === "grant") {
						single_query("grant",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"revoke") >= $match) {
						$temp = substr($current_query,0,6);
						if($temp === "revoke") {
						single_query("revoke",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"create synonym") >= $match) {
						$temp = substr($current_query,0,14);
						if($temp === "create synonym") {
						single_query("create synonym",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"start audit") >= $match) {
						$temp = substr($current_query,0,11);
						if($temp === "start audit") {
						single_query("start audit",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"stop audit") >= $match) {
						$temp = substr($current_query,0,10);
						if($temp === "stop audit") {
						single_query("stop audit",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"commit") >= $match) {
						$temp = substr($current_query,0,6);
						if($temp === "commit") {
						single_query("commit",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"rollback") >= $match) {
						$temp = substr($current_query,0,8);
						if($temp === "rollback") {
						single_query("rollback",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"savepoint") >= $match) {
						$temp = substr($current_query,0,9);
						if($temp === "savepoint") {
						single_query("savepoint",$current_query);
						$query = change_query($current_query,$query); 
						}
					}
					
					if (strpos($current_query,"set transaction") >= $match) {
						$temp = substr($current_query,0,15);
						if($temp === "set transaction") {
						single_query("set transaction",$current_query);
						$query = change_query($current_query,$query); 
						}
					}	
					$query_count++;
				}
				
				// Multi Query
				if($con->multi_query($query)) {
					try {
						do {
							$res = $con->store_result();
							if($res) {
							$num_col = $res->field_count;
							echo "<table class='table table-bordered'>";
							while($result = $res->fetch_row()) {
								echo "<tr>";
								for($count = 0; $count != $num_col ; $count++) {
									echo "<td>";
									echo $result[$count];
									echo "</td>";
								}
								echo "</tr>";
							}
							echo "</table> <br/>";
							$res->free();
							} else {
								echo "Error :".$con->errno.", ".$con->error;
							}
							
						} while($con->more_results() && $con->next_result());
						
						if($con->errno) {
								echo "Error : ".$con->errno.", ".$con->error;
						}
						
					} catch(Exception $ex) {
						echo $ex->getMessage();
					}
				} else {
					echo "Query Prob";
				}
			} else {
				echo "DataBase Not Exiests";
			}
		}
	} else { 
		echo "No Query Fired ";
		die();
	}
	
function sql_split($query1) {
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
	return $query2;
}

function single_query($type,$current_query) {
	$db = Database::getInstance();
	$con = $db->getConnection();
	if($con->errno) {
		echo "Error in Connection ".$con->errno." : ".$con->error;
	} else {
		try {
		if($con->query($current_query)) {
			echo "<h4>Successfully !</h4> <br/>";				
		}else {
			echo "Error : ".$con->connect_errno." , ".$con->error;	
		}
		}catch(Exception $ex) {
			echo $ex->getMessage();
		}
	}
}


function change_query($delete,$main_query) {
	$main_query = str_replace($delete," ",$main_query,$i);
	return $main_query;
}

?>
</body>
</html>