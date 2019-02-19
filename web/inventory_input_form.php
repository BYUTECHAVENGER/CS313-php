
<?php include "DB_Connection.php"; ?>

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
  echo '<tr>';
 $item_name = $row ['item_name'];

 $expiration =$row ['expiration'];
  
 $disposal_method = $row['disposal_method'];
  
 $recieved_date = $row['recieved_date'];
  
 $quantity = $row['quantity'];
 
 $notes = $row['notes'];

 echo "<td>$item_name</td>";

 echo "<td>$expiration</td>";

 echo "<td>$disposal_method</td>";

 echo "<td>$recieved_date</td>";

 echo "<td>$quantity</td>";

 echo "<td>$notes</td>";
  
 echo '</tr>';
}

?>
    <H1><b> Enter in the item information:</b></H1>
<!--<select name = "owner_id">  -->

<p>Item Name</p>
<input type="text" name="item name"><br>
<p>Quantity</p>
<input type="text" name="quantity"><br>
<p>Disposal method</p>
<input type="text" name="disposal_method"><br>
<p>Notes</p>
<input type="text" name="notes"><br>


 
 <h1><b>Insurance Information</b></h1>

 
  <p>Policy number</p>	
  <input type="text" name="policy_number"><br>	            
  <p>Policy value</p>		
  <input type="text" name="policy_value"><br>               
  <p>Policy company</p>
  <input type="text" name="policy_company"><br>	                   
  <p>Phone number</p>	
  <input type="text" name="phone_number"><br>
  



<h1>Storage Information</h1>


<h2>Storage Type</h2>
<select name = "storage_type">
    <option value = "dry_storage"> DRY STORAGE </option>
    <option value = "climate_controlled"> CLIMATE CONTROLLED </option>
    <option value = "refridgeration"> REFRIDGERATION </option>
</select>



<h1><b>Dates</b></h1>


<h2>Expiration date</h2>
<input type="date" name="expiration"><br>
<h2>Received date</h2>
<input type="date" name="recieved date"><br>

<br>
<br>
<input type="submit" value="Submit">
</form>


</body>
</html>