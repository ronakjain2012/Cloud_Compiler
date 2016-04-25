<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<!-- Stylesheet files-->

<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script src="jquery/jquery-1.20.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.circleGraphic.js"></script>


</head>
<body>
<?php include_once('DB.php');?>
<?php include ('auth.php');?>
<?php
	$db = Database::getInstance();
	$conn = $db->getConnection();
	$conn->select_db('cc');
	$check = userCheck();
	if($check) {
		$query = "select user_id from tokens where token='".normalizeString($_COOKIE['tokenID'])."'";	
		$res = $conn->query($query);
		$result=$res->fetch_assoc();
		if($res->num_rows === 1 and isset($result['user_id'])) {
		?>
<div class="main-body">
<div class="col-lg-12 col-md-12 col-sm-12">
<?php include('include/nav-header.php');  ?>
<div class="col-lg-3 sidebar">
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a data-toggle="tab" href="#home">Dashboard</a></li>
    <li><a data-toggle="tab" href="#menu1">Post</a></li>
    <li><a data-toggle="tab" href="#menu2">My Files</a></li>
    <li><a data-toggle="tab" href="#menu2">Prefrences and Settings</a></li>
  </ul>
</div>
<div class="col-lg-9 workplace">
<div class="col-lg-12">
<div class="container">
<div class="row">
	<div class="circleGraphic1 col-md-3 col-sm-6">10</div>
	<div class="circleGraphic2 col-md-3 col-sm-6">5</div>
	<div class="circleGraphic3 col-md-3 col-sm-6">20</div>
</div>
</div>
<script type="text/javascript">
window.onload=function(){
	$('.circleGraphic1').circleGraphic();
	$('.circleGraphic2').circleGraphic({'color':'#E53238'});
	$('.circleGraphic3').circleGraphic({'color':'#f13f13'});
}

</script>
</div>
</div>
</div>
</div>
<?php
		}
	} else 
		echo "No User Identification Detacted !";
?>
</body>
</html>