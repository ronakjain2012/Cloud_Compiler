<?php 
	setcookie("userName",$result['u_name'],time()-1,"/");
	setcookie("userProfile",$result['u_profile'],time()-1,"/");
	setcookie("user",$user,time()-1,"/");
	setcookie("tokenID",$token,time()-1,"/");
	header('location: http://localhost/CC/');
	exit();
	die();
?>