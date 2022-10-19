<?php
session_start();

$id = $_GET['id'];

define("SERVERNAME" , "localhost");
define("USERNAME" , "root");
define("PASSWORD" , "");
define("DB_NAME" , "project_iti");
$connection =  new mysqli(SERVERNAME, USERNAME , PASSWORD , DB_NAME);


    $q = "SELECT * FROM products WHERE id = '$id'";
	$data = $connection->query($q);
    $product = $data->fetch_assoc();
    
    $currentQty = $_SESSION['products'][$id]['qty']+1; //Incrementing the product qty in cart
    $_SESSION['products'][$id] =array('qty'=>$currentQty,'name'=>$product['p_name'],'image'=>$product['image'],'price'=>$product['price']);
    $product='';
    header("Location:../shopping-cart.php");
    
    

?>