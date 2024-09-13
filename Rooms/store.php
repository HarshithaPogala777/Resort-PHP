<?php
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		$link=mysqli_connect("localhost","root","harshitha777","Resort");


		


	
	table 1 creation
	$table1="Create table resortInfo1(
	Mr_Mrs varchar(10),
	FirstName varchar(20),
	LastName varchar(20),
	Date date,
	Address varchar(100),
	email varchar(50) PRIMARY KEY
	)";
	$t1=mysqli_query($link,$table1);
	
	table 2 creation
	$table2="Create table resortInfo2(
	city varchar(100),
	zipcode varchar(20),
	State varchar(60),
	country varchar(30),
	phonenumer varchar(10),
	email varchar(50),
	FOREIGN KEY(email) REFERENCES resortInfo1(email)
	)";
	$t2=mysqli_query($link,$table2);
	if($t2)
	{
	echo "table is successfully created";
	}
	else
	{
	echo "table is not been created";
	}
	
	
	// table 3 creation
	$table3="Create table resortInfo3(
	ArrivalDate date,
	DepartureDate date,
	No_child varchar(60),
	No_of_adult varchar(30),
	EXTRA_BED varchar(10),
	email varchar(50),
	FOREIGN KEY(email) REFERENCES resortInfo1(email)
	)";
	$t3=mysqli_query($link,$table3);
	if($t3)
	{
	echo "table is successfully created";
	}
	else
	{
	echo "table is not created";
	}
	
	table 4 creation
	$table4="CREATE TABLE resortInfo4(
	AdditionalInfo varchar(5000),
	email varchar(50),
	FOREIGN KEY(email) REFERENCES resortInfo1(email)
	)";
	$t4=mysqli_query($link,$table4);
	if($t4)
	{
	echo "connection is successfully ok";
	}
	else
	{
	echo "connection failed";
	}
	
	$i1="INSERT INTO resortInfo1(Mr_Mrs,FirstName,LastName,Date,Address,email) VALUES(?,?,?,?,?,?)";
	$i2="insert into resortInfo2(city,zipcode,State,country,phonenumer,email) values(?,?,?,?,?,?)";
	$i3="INSERT INTO resortInfo3(ArrivalDate,DepartureDate,No_child,No_of_adult,EXTRA_BED,email) values(?,?,?,?,?,?)";
	$i4="INSERT INTO resortInfo4(AdditionalInfo,email) values(?,?)";
	
	$is1=mysqli_prepare($link,$i1);
	
	mysqli_stmt_bind_param($is1,"ssssss",$mr,$first,$last,$date,$add,$email);
	$mr=$_POST['mrmrs'];
	$first=$_POST['firstname'];
	$last=$_POST['lastname'];
	$formdate=$_POST['date'];
	$add=$_POST['streea1'];
	$date=date("Y-m-d",strtotime($formdate));
	$email=$_POST['email'];
	mysqli_stmt_execute($is1);
	//mysqli_stmt_close($is1);
	
	$is2=mysqli_prepare($link,$i2);
	mysqli_stmt_bind_param($is2,"ssssss",$city,$zipcode,$State,$country,$phonenumber,$email);
	$city=$_POST['city'];
	$zipcode=$_POST['zipcode'];
	$State=$_POST['state'];
	$country=$_POST['country'];
	$phonenumber=$_POST['phonenumber'];
	$email=$_POST['email'];
	mysqli_stmt_execute($is2);
	//mysqli_stmt_close($is2);
	
	$is3=mysqli_prepare($link,$i3);
	mysqli_stmt_bind_param($is3,"ssssss",$ArrivalDate,$DepartureDate,$No_child,$No_of_adult,$EXTRA_BED,$email);
	$ArrivalDate=$_POST['arrivaldate'];
	$ArrivalDate=date("Y-m-d",strtotime($ArrivalDate));
	$DepartureDate=$_POST['departuredate'];
	$DepartureDate=date("Y-m-d",strtotime($DepartureDate));
	$No_child=$_POST['nochildren'];
	$No_of_adult=$_POST['noadults'];
	$EXTRA_BED=$_POST['ch'];
	$email=$_POST['email'];
	
	mysqli_stmt_execute($is3);
	//mysqli_stmt_close($is3);
	
	$is4=mysqli_prepare($link,$i4);
	mysqli_stmt_bind_param($is4,"ss",$AdditionalInfo,$email);
	$AdditionalInfo=$_POST['addinfo'];
	$email=$_POST['email'];
	mysqli_stmt_execute($is4);
	//mysqli_stmt_close($is4);
	//mysqli_close($link);
	echo "<a href='home.php'>Back to Home Page</a>"
?>	


