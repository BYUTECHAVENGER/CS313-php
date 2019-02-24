
<?php include "DB_Connection.php" ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delilah's Holding Co.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Inventory.css" />
    <script src="main.js"></script>
</head>

<H1>ITEM ENTRY PAGE                                       Delilah's Holding Co.</H1>
<body>
<form action = "SECRET_PHP_PROCESSING_PAGE.php" method = "POST">


<table>
<tr>
<th>ITEM        </th>
<th>EXPIRATION  </th>
<th>DISPOSAL    </th>
<th>RECEIVED    </th>
<th>QTY         </th>
<th>NOTES       </th>
<th>OWNER       </th>
<th>INS ID      </th>
<th>POLICY    </th>
<th>POLICY VALUE</th>
<th>OWNER PHONE    </th>
<th>EMERGENCY PHONE </th>
</tr>

<?php
foreach ($db->query("SELECT * FROM item JOIN insurance on insurance_id = insurance.insurance_id JOIN owners on owner_id = owners.owner_id") as $row)
{
  echo '<tr>';

 $item_name = $row ['item_name'];

 $expiration =$row ['expiration'];
  
 $disposal_method = $row ['disposal_method'];
  
 $recieved_date = $row ['recieved_date'];
  
 $quantity = $row ['quantity'];
 
 $notes = $row ['notes'];

 $owner_id = $row ['owner_id'];

 $insurance_id = $row ['insurance_id'];

 $policy_number = $row ['policy_number'];

 $policy_value = $row ['policy_value'];

 $phone_number = $row ['phone_number'];

 $first_name = $row ['first_name'];

 $last_name = $row ['last_name'];

 $address_street = $row ['address_street'];
 
 $address_city = $row ['address_city'];
 
 $address_state = $row ['address_state'];
 
 $phone_number = $row ['phone_number'];
 
 $emergency_number = $row ['emergency_number'];

 echo "<td>$item_name</td>";

 echo "<td>$expiration</td>";

 echo "<td>$disposal_method</td>";

 echo "<td>$recieved_date</td>";

 echo "<td>$quantity</td>";

 echo "<td>$notes</td>";

 echo "<td>$first_name $last_name</td>";

 echo "<td>$insurance_id</td>";

 echo "<td>$policy_number</td>";

 echo "<td>$policy_value</td>";

 echo "<td>$phone_numuber</td>";

 echo "<td>$emergency_number</td>";

 echo '</tr>';
}

?>
    <H1><b> Item Information</b></H1>
<!--<select name = "owner_id">  -->

<p>Item Name</p>
<input type="text" name="item_name"><br>
<p>Quantity</p>
<input type="text" name="quantity"><br>
<p>Disposal Method</p>
<input type="text" name="disposal_method"><br>
<p>Notes</p>
<input type="text" name="notes"><br>


<h1><b>Owner Information</b></h1>

<p>Owner's First Name</p>
<input type="text" name="first_name"><br>

<p>Owner's Last Name</p>
<input type="text" name="last_name"><br>

<p>Street Address</p>
<input type="text" name="address_street"><br>

<p>City</p>
<input type="text" name="address_city"><br>

<p>State</p>
<input type="text" name="address_state"><br>

<p>Owner's Phone Number</p>
<input type="text" name="phone_number"><br>

<p>Owner's EMERGENCY number</p>
<input type="text" name="emergency_number"><br>



 
 <h1><b>Insurance Information</b></h1>

 
  <p>Policy Number</p>	
  <input type="text" name="policy_number"><br>

  <p>Policy value</p>		
  <input type="text" name="policy_value"><br> 

  <p>Policy Company</p>
  <input type="text" name="policy_company"><br>	

  <p>Agent Phone Number</p>	
  <input type="text" name="phone_number"><br>
  



<h1>Storage Information</h1>


<h2>Storage Type</h2>
<select name = "storage_type">
    <option value = "dry_storage"> DRY STORAGE </option>
    <option value = "climate_controlled"> CLIMATE CONTROLLED </option>
    <option value = "refridgeration"> REFRIDGERATION </option>
</select>



<h1><b>Dates</b></h1>


<h2>Expiration Date</h2>
<input type="date" name="expiration"><br>

<h2>Received Date</h2>
<input type="date" name="recieved date"><br>

<br>
<br>
<input type="submit" value="Submit">
</form>


</body>
</html>