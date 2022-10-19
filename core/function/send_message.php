<?php
if(isset($_POST['submit'])){
	
    define("SERVERNAME" , "localhost");
    define("USERNAME" , "root");
    define("PASSWORD" , "");
    define("DB_NAME" , "project_iti");
    $connection =  new mysqli(SERVERNAME, USERNAME , PASSWORD , DB_NAME);

	$username = $_POST['username'];
	$email = $_POST['email'];
    $text = $_POST['text'];
    
	
	$insert_massage = "INSERT INTO massages (username , email, text, bool) VALUES('$username' , '$email', '$text', 0)";
	$connection->query($insert_massage);
	header("location:../index.php");



}

?>