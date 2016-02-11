<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Compiler</title>
<!-- Stylesheet files-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

<script src="ckeditor/jquery.js"></script>

</head>
<body>
	<!-- Bootstrap div Start -->
<div class="col-lg-12 col-md-12 col-sm-12">
  <div>
  	<?php include('include/nav-header.php'); ?>
    <div class="edit">
    	<form action="php_output.php" method="post" target="output">
        <textarea  id="editor" name="editor" class="form-control">
        </textarea>
        <input type="submit" value="Result"  class="btn btn-default"/>
        </form>
        <br/>
        <iframe name="output" height="300" width="100%" src="php_output.php">
        <iframe>
    </div>
  </div>
 </div>
</body>
<!-- JavaScript Files -->
<script src="js/bootstrap.js"></script>
</html>