<?php include ("include/functions.php");?>
<?php include ("DB.php");?>
<?php
if(isset($_POST['searchString'])) {
	$search = normalizeString($_POST['searchString']);
	$db = Database::getInstance();
	$conn= $db->getConnection();
	$conn->select_db('cc');
	$send=null;
	$query = "select post_id,post_title,post_category from user_posts";
	if($res = $conn->query($query)) {
		$send = "<datalist id=\"searches\">";
		while($result = $res->fetch_assoc()) {
			$send .="<option value=\"".$result['post_title']."\" > Title:".$result['post_title']." Category:".$result['post_category']."</option>";		
		}
		$send .="</datalist>";
	}
	echo $send;
}
?>