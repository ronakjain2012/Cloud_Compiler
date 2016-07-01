<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<!-- Stylesheet files-->

<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/circle.css">
<script src="jquery/jquery-1.20.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include_once('DB.php');?>
<?php include ('auth.php');?>
<?php
	$db = Database::getInstance();
	$conn = $db->getConnection();
	$conn->select_db('cc');
	$check = userCheck();
	$user = $_COOKIE['user'];
	if($check) {

		?>
<div class="main-body">
<div class="col-lg-12 col-md-12 col-sm-12">
<?php include('include/nav-header.php');  ?>
<div class="col-lg-3 col-md-3 sidebar">
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="dashboard.php">Dashboard</a></li>
    <li><a href="posts.php">Post</a></li>
    <li><a href="files.php">My Files</a></li>
    <li><a href="prefrences.php">Prefrences and Settings</a></li>
    <li><a href="signout.php">Sign Out</a></li>
  </ul>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 workplace">
  <div class="col-lg-12 col-md-12 col-sm-12 text-left"><br/>
    <?php
		
		$query = "select count(*) 'fileCount' from file_management where file_owner='$user'";
		$totalfiles = null;
		if($res = $conn->query($query)) {
			$result = $res->fetch_assoc();
			$totalfiles = $result['fileCount'];
		}
	?>
    <strong><span class="glyphicon glyphicon-file"></span>Files (<?php echo $totalfiles; ?>)</strong>
    <hr/>
    <?php
		$files=array();
		$query = "select lang,ext from language ";
		$res = $conn->query($query);
		while($result = $res->fetch_assoc()){
			$files[$result['lang']] = $result['ext']; 
		}	
	?>
    <div class="container">
     <div class="row"> 
	  <?php
	  	foreach($files as $type => $ext) {
			
			echo "<div class=\"text-left col-lg-1 col-md-1 col-sm-2 \">";
			echo $type."<br/>";
			if($totalfiles == 0)
			$totalfiles = 1;
			$query = "select count(*) 'fileCount' from file_management where file_owner='$user' and file_type='$ext'";
			$res = $conn->query($query);
			$result = $res->fetch_assoc();
			$ratio = round(($result['fileCount']/$totalfiles)*100);
			echo "
            <div class=\"c100 p".$ratio." small\">
                 <span>".$ratio."</span>
                    <div class=\"slice\">
                        <div class=\"bar\"></div>
                        <div class=\"fill\"></div>
                    </div>
                </div>
			</div>		
			";
		}
	  ?>
    </div>
    <br/><br/>
     <strong><span class="glyphicon glyphicon-certificate"></span> Posts </strong>
    <hr/>
    <div>
	<?php
	$query = "select post_content,post_category,post_time from user_posts where post_owner='".$user."'";
	$res = $conn->query($query);
	while($result = $res->fetch_assoc()) {
	?>
    <br/><div class='col-lg-12 col-md-12 col-sm-12 free'><div class='col-lg-6 col-md-6 col-sm-6 thumbnail post-border'><div class='col-lg-2 col-md-2 col-sm-2'> <img src='images/user_profile.jpg' style='width:50px;'/> </div><div class='col-lg-4 col-md-4 col-sm-4 text-left'> <?php echo $_COOKIE['userName']; ?> <br/> <?php echo $result['post_time']; ?> </div><div class='col-lg-12 col-md-12 col-sm-12 text-left'><hr/><?php echo $result['post_content']; ?><br/> <br/></div></div></div><br/>
    <?php
	}
	?>
    </div>
    </div>
  </div>
</div>
</div>
</div>
<?php
} else 
		echo "No User Identification Detacted !";
?>
</body>
</html>
