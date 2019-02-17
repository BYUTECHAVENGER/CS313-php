<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action = "SECRET_PHP_PROCESSING_PAGE.php" method = "POST">
  
echo "Results for the search of $results:";
echo '<br/>';
echo '<br/>';

<table>
<tr>
<th>Item Name is :  </th>
<th>Item expiration date is : </th>
<th>Item disposal method is:  </th>
<th>Item received date is :  </th>
<th>Item quantity is:  </th>
<th>Item notes/special instructions are:  </th>
</tr>

<?php
foreach ($db->query("SELECT * FROM item") as $row)
{
  echo '<tr>'
 $item_name = $row ['item_name'];

 $expiration =$row ['expiration'];
  
 $disposal_method = $row['disposal_method'];
  
 $recieved_date = $row['recieved_date'];
  
 $quantity = $row['quantity'];
 
 $notes = $row['notes'];

 echo "<td>$item_name</td>"

 echo "<td>$expiration</td>"

 echo "<td>$disposal_method</td>"

 echo "<td>$recieved_date</td>"

 echo "<td>$quantity</td>"

 echo "<td>$notes</td>"
  
 echo '</tr>'
}

?>
    <H1> Enter in the item information:</H1>
    <select name = "owner_id">
<?php

owner name

<select name = "storage_type">
    <option value = "dry_storage"> DRY STORAGE </option>
    <option value = "climate_controlled"> CLIMATE CONTROLLED </option>
    <option value = "refridgeration"> REFRIDGERATION </option>
</select>

?>
<p>Item Name</p>
<input type="text" name="item_name"><br>

quantity
<input type="text" name="quantity"><br>
disposal_method
<input type="text" name="item_name"><br>
notes
<input type="text" name="item_name"><br>


 
 <h1>Insurance Information</h1>

 <?php
  policy_number	
  <input type="text" name="policy_number"><br>	            
  policy_value		
  <input type="text" name="policy_value"><br>               
  policy_company
  <input type="text" name="policy_company"><br>	                   
  phone_number	
  <input type="text" name="phone_number"><br>
  ?>



<h1>Storage Information</h1>


storage_type
<select name = "storage_type">
    <option value = "dry_storage"> DRY STORAGE </option>
    <option value = "climate_controlled"> CLIMATE CONTROLLED </option>
    <option value = "refridgeration"> REFRIDGERATION </option>
</select>



<h1>dates</h1>


expiration 
<input type="date" name="expiration"><br>
received_date
<input type="date" name="receved_date"><br>


</form>


</body>
</html>