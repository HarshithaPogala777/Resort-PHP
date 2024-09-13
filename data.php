<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-image:url('regbg.jpg');
	background-size:cover;
}
</style>
</head>

<body>
	
</body>
</html>

<?php
	error_reporting(E_ALL);
		ini_set('display_errors', 1);
	$link=mysqli_connect("localhost","root","","Resort");
	/*$table_query="CREATE TABLE SIGNUP(
		Username varchar(20),
		Email varchar(30),
		Password varchar(40)
		)";
	*/
		
		$query="SELECT *from SIGNUP where Email=?";
		$stmt=mysqli_prepare($link,$query);
		mysqli_stmt_bind_param($stmt,"s",$Email);
		$Email=$_POST['email'];
		mysqli_stmt_execute($stmt);
		//$result=mysqli_stmt_num_rows($stmt);
		$res=mysqli_stmt_get_result($stmt);
		$result=mysqli_num_rows($res);
		mysqli_stmt_close($stmt);
		if($result>0)
		{	
			echo "<div align='center' style='margin-top:250px'>";
			echo "<b style='color:yellow;font-size:40px'>username already taken</b>";
			echo "<br>";
			echo "<b style='color:green;font-size:green'>try with other email</b>";
			echo "<br>"."<br>";
			echo "<a href='signup.php' style='text-decoration:none;color:deeppink;font-size:50px'>back to sign up form👈️</a>";
			echo "</div>";
		}
		else if($result==0)
		{
			$insert="INSERT INTO SIGNUP(Username,Email,Password) VALUES(?,?,?);";
			$prepare=mysqli_prepare($link,$insert);
			mysqli_stmt_bind_param($prepare,"sss",$Username,$Email,$Password);
			$Username=$_POST['username'];
			$Email=$_POST['email'];
			$Password=$_POST['pass'];
		
			mysqli_stmt_execute($prepare);
			mysqli_stmt_close($prepare);
		
			echo "Go to Our Website Home Page👉️"."<a href='home.php' style='text-decoration:none;color:deeppink;font-size:50px'>Home Page</a>";
		}
		
	
	
?>
