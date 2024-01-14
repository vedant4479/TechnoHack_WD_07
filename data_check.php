<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="members";
$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}

if(isset($_POST['REGISTER']))
{
	$FULL_NAME=$_POST['FullName'];
	$Age=$_POST['Age'];
	$Gender=$_POST['Gender'];
	$EMAIL=$_POST['Email'];
	$PHONE_NO=$_POST['PhoneNo'];

	$sql="INSERT INTO register(name,age,gender,email,phoneno) VALUES ('$FULL_NAME', '$Age', '$Gender', '$EMAIL', '$PHONE_NO')";

	$result=mysqli_query($data,$sql);

	if($result)
	{
		$_SESSION['message']="Your Registration is Successfull";
		header("location:index.php");
	}
	else
	{
		$_SESSION['message']="Your Registration is Successfull";
		header("location:index.php");
	}
}
?>