<?php

if(isset($_POST['submit'])){
	
    define("SERVERNAME" , "localhost");
    define("USERNAME" , "root");
    define("PASSWORD" , "");
    define("DB_NAME" , "project_iti");
    $connection =  new mysqli(SERVERNAME, USERNAME , PASSWORD , DB_NAME);

	$username = $_POST['username'];
	$password = $_POST['pass'];

	$select_user = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";
    
	$result_user = $connection->query($select_user);
    
	$count = $result_user->num_rows;
    
	if($count > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['products'] = array();


     header("Location:../index.php");
	}else
	{
		header("location:../login.php");
	}


}

?>