<?php include ("include/functions.php");?>

<?php
function userCheck() {
	$db = Database::getInstance();
	$conn = $db->getConnection();
	$conn->select_db('cc');
	if(isset($_COOKIE['tokenID'])) {
	$token = normalizeString($_COOKIE['tokenID']);
	$query = "select count(*) 'takenAval' from tokens where token='".$token."'";
	$res = $conn->query($query);
	$result=$res->fetch_assoc();
	if($res->num_rows === 1 and $result['takenAval']) {
		return true;
	}
	} else
		return false;
	
	return false; 
}
?>