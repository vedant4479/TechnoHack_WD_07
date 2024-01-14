<?php


error_reporting(0);
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

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name = $_POST['MemberId'];
		$pass = $_POST['password'];

		$sql="select * from users where ID='".$name."' AND Password='".$pass."'";

		$result=mysqli_query($data,$sql);

		$row=mysqli_fetch_array($result);

		if($row["User"]=="member")
		{
			$_SESSION['username']=$name;
			$_SESSION['User']="member";
			header("location:memberhome.php");
		}

		elseif($row["User"]=="admin")
		{
			$_SESSION['username']=$name;
			$_SESSION['User']="admin";
			header("location:adminhome.php");
		}

		else
		{
			$message= "Username Or Password Does Not Match";
			$_SESSION['loginMessage']=$message;
			header("location:login.php");
		}
	}
?>