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
	if(isset($_POST['editor'])) {
		include_once('DB.php');
		/*$host = "localhost";
		$user_name = "root";
		$user_pwd = "root";
		$db= "test";
		$con = new MySQLi($host,$user_name,$user_pwd);*/
		$db = Database::getInstance();
		$con = $db->getConnection();
		
		if($con->errno) {
			echo "Connection Error";
		} else {
			if(1){
				$query = htmlspecialchars_decode($_POST['editor']);
				$set = $con->multi_query($query);
				if($set) {
					try {
						do {
							$res = $con->store_result();
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
						} while($con->more_results() && $con->next_result());
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
	} else 
		echo "No Query Fired ";
?>
</body>
</html>