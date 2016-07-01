<?php include ("include/functions.php");?>
<?php include_once("DB.php");?>
<?php
if(isset($_POST['post_title']) and isset($_POST['post_content']) and isset($_POST['post_category']) and isset($_POST['post_token'])) {
	$category = normalizeString($_POST['post_category']);
	$content = normalizeString($_POST['post_content']);
	$title = normalizeString($_POST['post_title']);
	$token = normalizeString($_POST['post_token']);
	$db = Database::getInstance();
	$conn= $db->getConnection();
	$conn->select_db('cc');
	$query = "insert into user_posts(post_title,post_content,post_category,post_time,post_owner) values('$title','$content','$category',now(),(select user_id from tokens where token='".$token."'))";
	if($conn->query($query)) {
		echo $content;
	} else {
		echo "error";
	}
}
?>