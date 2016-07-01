<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search Results</title>

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
<div class="col-lg-12 col-md-12 col-sm-12">
<h3>Frequent </h3>
<hr/>
<?php
if(isset($_GET['CCSearch'])) {
	$db = Database::getInstance();
	$conn= $db->getConnection();
	$conn->select_db('cc');	
	$q = normalizeString($_GET['CCSearch']);
	$query = "select * from user_posts where post_title like '$q'";
	$res = $conn->query($query);
	if($conn->errno) {
		echo $conn->errno;
	} else {
		if($conn->error) {
			$conn->error;
		} else {
			while($result = $res->fetch_assoc()) {
			?>
              <br/><div class='col-lg-12 col-md-12 col-sm-12 '><div class='col-lg-6 col-md-6 col-sm-8 thumbnail post-border '><div class='col-lg-2 col-md-2 col-sm-2'> <img src='images/user_profile.jpg' style='width:50px;'/> </div><div class='col-lg-4 col-md-4 col-sm-4 text-left'> <?php echo $result['post_owner'] ?> <br/> <?php echo $result['post_time']; ?> </div><div class='col-lg-12 col-md-12 col-sm-12 text-left'><hr/><?php echo $result['post_content']; ?> <br/><br/></div></div></div>	
            <?php
			}
		}
	}
?>

</div>
<div class="col-lg-12 col-md-12 col-sm-12">
<h3>Related </h3>
<hr/>
<?php

	$db = Database::getInstance();
	$conn= $db->getConnection();
	$conn->select_db('cc');	
	$q = normalizeString($_GET['CCSearch']);
	$query = "select * from user_posts where post_title like '%$q%'";
	$res = $conn->query($query);
	if($conn->errno) {
		echo $conn->errno;
	} else {
		if($conn->error) {
			$conn->error;
		} else {
			while($result = $res->fetch_assoc()) {
			?>
              <br/><div class='col-lg-12 col-md-12 col-sm-12 '><div class='col-lg-6 col-md-6 col-sm-8 thumbnail post-border '><div class='col-lg-2 col-md-2 col-sm-2'> <img src='images/user_profile.jpg' style='width:50px;'/> </div><div class='col-lg-4 col-md-4 col-sm-4 text-left'> <?php echo $result['post_owner'] ?> <br/> <?php echo $result['post_time']; ?> </div><div class='col-lg-12 col-md-12 col-sm-12 text-left'><hr/><?php echo $result['post_content']; ?> <br/><br/></div></div></div>	
            <?php
			}
		}
	}
?>
</div>
</div>
<?php
}
?>
</body>
</html>