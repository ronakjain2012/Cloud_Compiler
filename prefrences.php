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
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
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
		
	if(isset($_POST['u_name'])) {
		$query = "update user_personal_information set u_mail='".htmlentities($_POST['u_mail'])."' where user_id='".$user."'";
		//echo $query;
		$conn->query($query);
		
		$query = "update user_login_information set user_mail='".hash('md5',htmlentities($_POST['u_mail']))."' where user_reg='".$user."'";
		echo $query;
		$conn->query($query);
		
		$query = "update user_personal_information set u_sex='".htmlentities($_POST['u_sex'])."' where user_id='".$user."'";
		//echo $query;
		$conn->query($query);
		$query = "update user_personal_information set u_tel='".htmlentities($_POST['u_tel'])."' where user_id='".$user."'";
		//echo $query;
		$conn->query($query);
		$query = "update user_personal_information set u_name='".htmlentities($_POST['u_name'])."' where user_id='".$user."'";
		//echo $query;
		$conn->query($query);
		
		//echo "Done";
	}
?>
<div class="main-body">
<div class="col-lg-12 col-md-12 col-sm-12">
<?php include('include/nav-header.php');  ?>
<div class="col-lg-3 col-md-3 sidebar">
  <ul class="nav nav-pills nav-stacked">
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="posts.php">Post</a></li>
    <li><a href="files.php">My Files</a></li>
    <li class="active"><a href="#menu2">Prefrences and Settings</a></li>
    <li><a href="signout.php">Sign Out</a></li>
  </ul>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 workplace">
  <div class="col-lg-12 col-md-12 col-sm-12 text-center"><br/>
  	
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Edit Personal Information</a></li>
  <li><a data-toggle="tab" href="#menu1">Change Password</a></li>
	</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="col-lg-5">
    <?php
	$query = "select * from user_personal_information where user_id='".$user."'";
	//echo $query;
	$res = $conn->query($query);
	if($conn->errno) {
		echo $conn->errno;
	}
		if($conn->error) {
			echo $conn->error;
		} else {
			$result = $res->fetch_assoc();
			//print_r($result);
	?>
    <form method="post">
    <br/>
    <br/>
    	<input type="text" name="u_name" class="form-control free" placeholder="Name" value="<?php echo $result['u_name']; ?>"/>
		<input type="text" name="u_tel" class="form-control free" placeholder="Number" value="<?php echo $result['u_tel']; ?>"/>
       	<input type="text" name="u_mail" class="form-control free" placeholder="Email" value="<?php echo $result['u_mail']; ?>"/>
       	<input type="text" name="u_sex" class="form-control free" placeholder="Gender M/F" value="<?php echo $result['u_sex']; ?>"/>
        <input type="submit" value="Change" class="btn btn-success">
    </form>
    </div>
  </div>
  <div id="menu1" class="tab-pane fade">
    
    <?php
// Change password 
$email = isset($_POST['email']) ? hash('md5',normalizeString($_POST['email'])) : null;
$reg = isset($_POST['reg']) ? normalizeString($_POST['reg']) : null;
$pwd = isset($_POST['pwd']) ? hash('md5',normalizeString($_POST['pwd'])) : null;
$count = 0;
if(isset($email) and isset($pwd) and isset($reg)) {
	$db = Database::getInstance();
	$conn = $db->getConnection();
	$conn->select_db('cc');
	if($conn->errno) {
		echo $conn->errno;
	} else {
		if($conn->error) {
		echo $conn->error;
		} else {
			$query = "select count(*) 'rows' from user_login_information where user_mail='".$email."' and user_reg='".$reg."'";
			//echo $query."<br/>";
			$res = $conn->query($query);
			if($res) {
				$result = $res->fetch_assoc();
				if($result['rows'] == 1) {
					$query = "update user_login_information set user_password='".$pwd."' where user_mail='".$email."' and user_reg='".$reg."'";
					//echo $query."<br/>";
					if($conn->query($query))
					{
						$count=1;
					}else {
						$count=2;
					}
				} else {
				$count=2;
			}
			} else {
				$count=2;
			}
		}
	}
}
?>

<div class="col-lg-12 col-md-12 col-sm-12 free">
	<form method="post">
    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-offset-4 row free"><input type="text" name="email" size="20" class="form-control" placeholder="Email Address" /> </div>
    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-offset-4 row free"><input type="text" name="reg" size="20" class="form-control"  placeholder="Registration ID" /> </div>
    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-offset-4 row free"><input type="password" name="pwd" size="20" class="form-control"  placeholder="Password" /> </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-offset-4 row text-center free"><input type="submit" class="btn btn-success" value="Change Password" /> <br/> <?php
if ($count == 1) {
?>
<div class="alert alert-success" role="alert"><strong>Great ! &nbsp; </strong> You're Password Sucessfully Changed.</div>
<?php
}
?>

<?php
if ($count == 2) {
?>
<div class="alert alert-warning" role="alert"><strong>Error ! &nbsp; </strong> You Have Enterd Wrong Data.</div>
<?php
}
?>
 </div>
    </form>
</div>

    
  </div>
</div>
  </div>
</div>
</div>
</div>
<?php } } else
	echo "Login to Access Page";
?>
</body>
</html>