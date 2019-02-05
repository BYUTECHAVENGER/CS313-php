<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   
<table>
<tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
</tr>
    <?php
        foreach ($_SESSION as $fname => $qty) 
        {
            echo "<tr> <td>$fname</td>";
            echo " <td>1.00</td>";
            echo " <td>$qty</td></tr>";
        }
    ?>
     </table>
     <br>
     <br>
     <br>
     <br>
     <a href="Browse.html" target="_blank">Return to shopping</a>

</body>
</html>