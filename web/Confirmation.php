<?php session_start(); ?>
<?php
$street = htmlspecialchars($_POST['street']);
$city = htmlspecialchars($_POST['city']);
$state = htmlspecialchars($_POST['state']);
$zip = htmlspecialchars($_POST['zip']);




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1> The current order in the shopping cart is:<h1>

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


<h1> The order listed above will be shipped to: <h1>

<?php
echo $street; 
echo "<br>";
echo $city;
echo "<br>";
echo $state;
echo "<br>";
echo $zip;

?>
<br>


</body>
</html>