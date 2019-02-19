<?php include "DB_Connection.php"; 


$item_name = $_POST['item_name'];

$recieved_date = $_POST['recieved_date'];

$expiration = $_POST['expiration'];

$disposal_method = $_POST['disposal_method'];

$quantity = $_POST['quantity'];

$notes = $_POST['notes'];

$storage_type = $_POST['storage_type'];

$db->query ("INSERT INTO item (item_name, expiration, disposal_method, recieved_date, quantity, storage_type, notes)
 VALUES ('$item_name', '$expiration', '$disposal_method', '$recieved_date', $quantity, '$storage_type', '$notes')");



header ("location: inventory_input_form.php");
die();

?>