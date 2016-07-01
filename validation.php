<?php include ("DB.php");?>
<?php include ("include/functions.php");?>
<?php

if(isset($_POST['userName'])) {
		$db = Database::getInstance();
		$conn = $db->getConnection();
		$conn->select_db('cc');
		$query = "select count(*) 'total' from user_personal_information where u_nameID='".normalizeString($_POST['userName'])."'";
		$a = normalizeString($_POST['userName']);
		if(strlen($a)>0){
		$res = $conn->query($query);
		$result = $res->fetch_assoc();
		if($result['total'] == 0) {
			//echo $query;
			echo "<span class=\" glyphicon glyphicon-ok-circle\" style=\"font-size:20px;\"> </span>";
		} else {
			echo "<span class=\" glyphicon glyphicon-remove-circle\" style=\"font-size:20px;\"> </span>";
		}
		
		} else
			echo "<span class=\" glyphicon glyphicon-remove-circle\" style=\"font-size:20px;\"> </span>";
	}
	
	if(isset($_POST['userID'])) {
		$db = Database::getInstance();
		$conn = $db->getConnection();
		$conn->select_db('cc');
		$query = "select count(*) 'total' from user_personal_information where user_id='".normalizeString($_POST['userID'])."'";
		$a = normalizeString($_POST['userID']);
		if(strlen($a)>0){
		$res = $conn->query($query);
		$result = $res->fetch_assoc();
		if($result['total'] == 0) {
			//echo $query;
			echo "<span class=\" glyphicon glyphicon-ok-circle\" style=\"font-size:20px;\"> </span>";
		} else {
			echo "<span class=\" glyphicon glyphicon-remove-circle\" style=\"font-size:20px;\"> </span>";
		}
		
		} else
			echo "<span class=\" glyphicon glyphicon-remove-circle\" style=\"font-size:20px;\"> </span>";
	}
	
	if(isset($_POST['email'])) {
		$db = Database::getInstance();
		$conn = $db->getConnection();
		$conn->select_db('cc');
		$query = "select count(*) 'total' from user_personal_information where u_mail='".normalizeString($_POST['email'])."'";
		$res = $conn->query($query);
		$result = $res->fetch_assoc();
		if($result['total'] == 0 and (filter_var(normalizeString($_POST['email']),FILTER_VALIDATE_EMAIL))) {
			echo "<span class=\" glyphicon glyphicon-ok-circle\" style=\"font-size:20px;\"> </span>";
		} else {
			echo "<span class=\" glyphicon glyphicon-remove-circle\" style=\"font-size:20px;\"> </span>";
		}
	}
?>