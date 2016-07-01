<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<script src="../jquery/jquery-1.8.3.min.js"></script>

</head>
<body>
<!-- Nav Start -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"> <a class="navbar-brand" href="http://localhost/CC/" style="color:#EDEDED;"><strong>C</strong>ode on <strong>C</strong>loud</a> </div>
    <ul class="nav navbar-nav">
    </ul>
    <?php
	if(isset($_COOKIE['tokenID'])) {
	?>
    
     <ul class="nav navbar-nav navbar-right">
   	<li>
    <div class="dropdown">
    <button type="button" class="dropdown-toggle header-button" data-toggle="dropdown"> <img src='images/user_profile.jpg' style='width:32px;border:2px solid #C9C9C9; border-radius:20px;'/>  <?php echo $_COOKIE['userName']; ?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="files.php">Files</a></li>
      <li><a href="prefrences.php">Prefrances</a></li>
      <li class="divider"></li>
      <li><a href="signout.php">Sign Out</a></li>
    </ul>
  </div>
  </li>
    </ul>
   <?php
	} else {
	?>
   	<ul class="nav navbar-nav navbar-right">
      <li><a href="Members.php"><span class="glyphicon glyphicon-user" style="font-size:18px"> </span> SignIn/SignUp</a></li>
    </ul>
    
	<?php
	}
   ?>
  </div>
</nav>
<!-- Nav END --> 

</body>
</html>