<?php
include 'connection.php';
if(isset($_POST['submit'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$select_admin = "SELECT * FROM admin WHERE name = '$username' AND password = '$password'";

	$result_admin = $connection->query($select_admin);
	$count = $result_admin->num_rows;

	if($count > 0){
		session_start();
		$_SESSION['adminname'] = $username;


     header("Location:../index.php");
	}else
	{
		header("location:../login.php");
	}


}

?>