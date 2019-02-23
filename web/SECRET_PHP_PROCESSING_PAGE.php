                                                                                                                                                                                           <?php include "DB_Connection.php";


$item_name = $_POST['item_name'];

$recieved_date = $_POST['recieved_date'];
                                                                           
$expiration = $_POST['expiration'];

$disposal_method = $_POST['disposal_method'];

$quantity = $_POST['quantity'];

$notes = $_POST['notes'];

$storage_type = $_POST['storage_type'];

$policy_number = $_POST['policy_number'];

//$insurance_id = $_POST["insurance_id"];

$policy_value = $_POST["policy_value"];

$policy_company = $_POST["policy_company"];

$phone_numuber = $_POST['phone_number'];

$db->query ("INSERT INTO owners (first_name, last_name, address_street, address_city, address_state, phone_number, emergency_number)
 VALUES ('$first_name', '$last_name', '$address_street', '$address_city', '$address_state', '$phone_number', '$emergency_number')");

$newowner_id = $db->lastInsertId('owners_owner_id_seq');

$db->query ("INSERT INTO insurance (policy_number, policy_value, policy_company, phone_number)
 VALUES ('$policy_number', '$policy_value', '$policy_company', '$phone_numuber')");

$newinsurance_id = $db->lastInsertId('insurance_insurance_id_seq');

$db->query ("INSERT INTO item (item_name, expiration, disposal_method, recieved_date, quantity, storage_type, notes, insurance_id)
 VALUES ('$item_name', '$expiration', '$disposal_method', '$recieved_date', $quantity, '$storage_type', '$notes', '$insurance_id')");


 






header ("location: inventory_input_form.php");
die();

?>