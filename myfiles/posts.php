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
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/post.js"></script>

<script>
$(document).ready(function(){
    $("#post").click(function(){
        var title = $('#post_title').val();
		var content = $('#post_content').val();
		var category = $('#post_category').val();
		var token = $.cookie("tokenID");
		var username = $.cookie("userName");
		$.post("handlePost.php",
        {
          post_title: title,
		  post_content: content,
		  post_category: category,
		  post_token: token
        },
        function(data,status){
            //alert("Data: " + data + "\nStatus: " + status);
			if(status=="success") {
				$('#posts_').prepend("<div class='col-lg-12 col-md-12 col-sm-12 free'><div class='col-lg-3 col-md-1 col-sm-1'>&nbsp;</div><div class='col-lg-12 col-md-12 col-sm-12 thumbnail post-border'><div class='col-lg-2 col-md-2 col-sm-2'> <img src='images/user_profile.jpg' style='width:50px;'/> </div><div class='col-lg-4 col-md-4 col-sm-4 text-left'> "+username+" <br/> 15-May-2016 </div><div class='col-lg-12 col-md-12 col-sm-12 text-left'><hr/>"+data+"</div></div></div><br/></div>");	
				$('#post_title').val("");
				$('#post_content').val("Write Something you want to share ... ");
			}
        });
    });
	
});
</script>
</head>
<body>
<?php include_once('DB.php');?>
<?php include ('auth.php');?>
<?php
	$db = Database::getInstance();
	$conn = $db->getConnection();
	$conn->select_db('cc');
	$check = userCheck();
	$user = null;
	if($check) {
		$query = "select user_id from tokens where token='".normalizeString($_COOKIE['tokenID'])."'";	
		$res = $conn->query($query);
		$result=$res->fetch_assoc();
		if($res->num_rows === 1 and isset($result['user_id'])) {
			$user = $result['user_id'];
		?>
<div class="main-body">
<div class="col-lg-12 col-md-12 col-sm-12">
<?php include('include/nav-header.php');  ?>
<div class="col-lg-3 col-md-3 sidebar">
  <ul class="nav nav-pills nav-stacked">
    <li><a href="dashboard.php">Dashboard</a></li>
    <li class="active"><a href="posts.php">Post</a></li>
    <li><a href="files.php">My Files</a></li>
    <li><a href="#menu2">Prefrences and Settings</a></li>
    <li><a href="signout.php">Sign Out</a></li>
  </ul>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 workplace">
  <div class="col-lg-12 col-md-12 col-sm-12 text-center"><br/>
    <div class="col-lg-3 col-md-1 col-sm-1">&nbsp; </div>
    <div class="col-lg-6 col-md-8 col-sm-11 thumbnail thumbnail1">
      <div class="col-lg-12 col-md-12">
        <input type="text" class="form-control free" name="post_title" id="post_title" placeholder="Post Title ..."/>
      </div>
      <div class="col-lg-12 col-md-12">
        <textarea class="form-control free" rows="6" name="post_content" id="post_content">Write Something you want to share ...</textarea>
      </div>
      <div class="col-lg-7 col-md-7">
        <select name="post_category" class="form-control free" id="post_category">
          <?php
	$query = "SELECT lang FROM language ORDER BY l_id ASC ";
	if($res = $conn->query($query)) {
	
	while($result = $res->fetch_assoc())
		echo "<option value=".$result['lang']."> ".$result['lang']."</option>";
	
	}else 
		echo "<option value='others'> Others </option>";
	?>
        </select>
      </div>
      <div class="col-lg-4 col-md-4 col-xs-offset-1">
        <button type="button" class="btn btn-success form-control free" onClick="postData();" id="post">Post</button>
      </div>
      <div class="col-lg-3 col-md-1 col-sm-1"> &nbsp; </div>
    </div>
    
    <!--Posts-->
    <div id="posts_" class="col-lg-8 col-md-8 col-sm-8 col-xs-offset-2">
        <!--Posts Area-->
        <?php
		$query = "SELECT * FROM user_posts ORDER BY post_time DESC limit 20";
		if($res = $conn->query($query)) {
			while($result = $res->fetch_assoc()) {
				?>
    <br/><div class='col-lg-12 col-md-12 col-sm-12 '><div class='col-lg-12 col-md-12 col-sm-12 thumbnail post-border '><div class='col-lg-2 col-md-2 col-sm-2'> <img src='images/user_profile.jpg' style='width:50px;'/> </div><div class='col-lg-4 col-md-4 col-sm-4 text-left'> <?php echo $_COOKIE['userName']; ?> <br/> <?php echo $result['post_time']; ?> </div><div class='col-lg-12 col-md-12 col-sm-12 text-left'><hr/><?php echo $result['post_content']; ?> <br/><br/></div></div></div>	
    <?php
	
	}
		} else {
			echo "Posts can not be loaded at time. ";
		}
		?>
    <br/>
    
    <br/>
    <!--Post End-->
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