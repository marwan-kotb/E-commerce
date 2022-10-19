<?php


$text = $_GET['text'];
$id = $_GET['id'];
include 'function/connection.php';

$select_one_message = "UPDATE massages SET bool = 1 WHERE id = $id";
$connection->query($select_one_message);

?>
<tr><?php echo $text?><tr>
