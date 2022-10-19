<?php
if(isset($_POST['submit'])){
	
    define("SERVERNAME" , "localhost");
    define("USERNAME" , "root");
    define("PASSWORD" , "");
    define("DB_NAME" , "project_iti");
    $connection =  new mysqli(SERVERNAME, USERNAME , PASSWORD , DB_NAME);

	$username = $_POST['username'];
	$password = $_POST['pass'];

	
	$insert_user = "INSERT INTO users (name , password) VALUES('$username' , '$password')";
	$connection->query($insert_user);
	header("location:../login.php");



}

?>