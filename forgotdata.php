
<html>
<head>
</head>
<body style="background-color:aqua">

</body>
</htmll>
<?php
	 error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $link = mysqli_connect("localhost", "root", "", "Resort");
    
    $email = $_POST['email'];
    
    $query = "select * from SIGNUP where Email=?";
    $prepare = mysqli_prepare($link, $query);
    
    mysqli_stmt_bind_param($prepare, "s", $email);
    mysqli_stmt_execute($prepare);
    
   mysqli_stmt_store_result($prepare); // Store the result set
   // mysqli_stmt_fetch($prepare);
    
    $num_rows = mysqli_stmt_num_rows($prepare);
	if(!($num_rows>0))
	{
		echo "<div align='center'>";
			echo "User with this name does not exists";
		echo "</div>";
	}
	else
	{
		$query2="UPDATE SIGNUP SET Password=? where Email=?";
		  $prepare2 = mysqli_prepare($link, $query2);

    // Assuming $newPassword and $emailToUpdate are the new password and email values
    mysqli_stmt_bind_param($prepare2, "ss", $newpassword,$emailToUpdate);
    $emailToUpdate=$_POST['email'];
    $newpassword=$_POST['pass'];
    mysqli_stmt_execute($prepare2);

    // Check for success or handle errors
    if(mysqli_stmt_affected_rows($prepare2) > 0) {
        echo "Update successful";
        echo "Back to login page";
        echo "<a href='login.php'>Back to Login page</a>";
    } else {
        echo "Update failed";
    }

    // Close the statement
    mysqli_stmt_close($prepare2);
		
		
	}
?>
