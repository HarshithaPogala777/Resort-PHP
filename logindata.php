<!DOCTYPE html>
<html>
<head>
<style>
	body
	{
	background-image:url('resort_bg.jpg');
	background-size:cover;
	}
</style>
</head>
<body>
	<div align="cneter">
	</div>
</body>
</html>

<?php
	$link=mysqli_connect("localhost","root","","Resort");
	$query1="SELECT *from SIGNUP where Email=? and Password=?";
	
	$query_prep=mysqli_prepare($link,$query1);
	mysqli_stmt_bind_param($query_prep,"ss",$Email,$Password);
	$Email=$_POST['email'];
	$Password=$_POST['pass'];
	mysqli_stmt_execute($query_prep);
	$resul=mysqli_stmt_num_rows($query_prep);
	if(!($result>0))
	{	echo "<div align='center' style='margin-top:50px'>";
		echo "invalid user details  with these details user doesn't exist";
		echo "<a href='login.php'>Provide Correct details</a>";
		echo "</div>";
	}
	//$stmt=mysqli_prepare($link,$email);
?>
