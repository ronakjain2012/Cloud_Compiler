<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SQL | Cloud Compiler</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="col-lg-12 col-md-12 col-sm-12">
<div>
<?php include('include/nav-header.php'); ?>
<div class="edit">
  <form action="sql_output.php" method="post" target="output">
    <textarea  id="editor" name="editor" class="form-control" autofocus="on"></textarea>
    <input type="submit" value="Result"  class="btn btn-default"/>
  </form>
  <br/>
  <iframe name="output" height="300" width="100%" src="sql_output.php" class="output">
  <iframe>
</div>
</div>
</div>
</body>
</html>