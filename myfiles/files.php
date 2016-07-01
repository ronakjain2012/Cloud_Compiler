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
</head>
<body>
<?php include_once('DB.php');?>
<?php include ('auth.php'); ?>
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
    <li><a href="dashboard.php">Dashboard</a></li>
    <li class="active"><a href="posts.php">Post</a></li>
    <li><a href="files.php">My Files</a></li>
    <li><a href="#menu2">Prefrences and Settings</a></li>
    <li><a href="signout.php">Sign Out</a></li>
  </ul>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 workplace">
  <?php
$valid_formats = array("c", "cpp", "php", "java", "bat");
$max_file_size = 1024*5000; //100 kb
$path = "myfiles/"; // Upload directory
$count = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
	            $fullPath= $path.$name;
				$ext = pathinfo($name, PATHINFO_EXTENSION);
				$query = "insert into file_management (file_owner,file_upload_time,file_name,file_path,file_type) values('$user',now(),'$name','$fullPath','$ext')";
				$conn->query($query);
				if($conn->errno)
					echo $conn->errno;
				if($conn->error)
					echo $conn->error;
					
				$count++; // Number of successfully uploaded file
	        }
	    }
	}
}
?>
  <div class="col-lg-12 col-md-12 col-sm-12 text-center" ><br/>
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="col-lg-12 col-md-12 col-sm-12 text-left">
        <label class=""><span class="glyphicon glyphicon-file"></span>Upload Source Files</label>
        <hr/>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <form method="post" enctype="multipart/form-data">
          <label for="file" class="uploadfile" class="btn btn-default">
          <span class="glyphicon glyphicon-upload"></span>Upload File
          </label>
          <br>
          <input type="file" id="file" name="files[]" multiple="multiple" style="display:none"/>
          <input type="submit" value="Upload" class="btn btn-success"/>
        </form>
        <?php
		if($count > 0) {
		?>
        <div class="text-center">
        <center>
        	<div class="alert alert-success" style="width:40%">
  				<strong>Success!</strong> Files Uploaded. 
			</div>
            </center>
        </div>
        <?php
		}
		?>
      </div>
    </div>
  </div>
  
  <div class="col-lg-12 col-md-12 col-sm-12 text-left" ><br/>
 	<div class="col-lg-12 col-md-12 col-sm-12">
      <div class="col-lg-12 col-md-12 col-sm-12 text-left">
        <br/>
        <label class=""><span class="glyphicon glyphicon-file"></span>Uploaded Source Files</label>
        <hr/>
      </div>
      
      <div class="col-lg-12 col-md-12 col-sm-12">
      	<div class="col-sm-2">
        sd
        </div>
        <div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div><div class="col-sm-2">
        sd
        </div>
      </div>
      </div>   
  </div>

</div>
</div>
</div>
<?php } else {
echo "No User Identification Detacted !";
}?>
</body>
</html>