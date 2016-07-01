<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Forget Password</title>

<!-- Stylesheet files-->

<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="jquery/jquery-1.20.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    $('#CCSearch').keyup(function(){
			var search_string = $('#CCSearch').val();
			if(search_string == '') {
				$('#suggestions').html('');
			} else {
				$.post("search.php",
				{
					searchString: search_string
				}, function(data,status){
            		$('#suggestions').html(data);
					//alert(status);
        		});
			}
		});
});
</script>
</head>
<body class="main-body">
<!-- Bootstrap div Start -->
<div class="col-lg-12 col-md-12 col-sm-12">
<div>
<?php include('include/nav-header.php');  ?>
<?php include ("include/functions.php");?>
<?php include ("DB.php");?>
<!-- Search START -->
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
<div class="search col-lg-12 col-md-11 col-sm-11">
  <form method="get" action="searchSource.php">
    <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
    <div class="input-group col-lg-10 col-md-9 col-sm-9"><span class="input-group-addon small-border-search-right" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
      <input list="searches" class="form-control small-border" placeholder="Search" name="CCSearch" id="CCSearch" aria-describedby="basic-addon1" />
      <div id="suggestions">     
      </div>
    </div>
    <div class="col-lg-12 col-md-11 col-sm-11"><br/>
      <input type="submit" class="btn btn-success form-control" value="Search" />
    </div>
  </form>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 text-left">
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
</body>
</html>