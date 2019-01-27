<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<h1>Please enter your shipping address</h1>
<form method="post" action="Confirmation.php">
Street: <input type="text" name="street" ><br>
City: <input type="text" name="city" ><br>
State: <input type="text" name="state" ><br>
ZipCode: <input type="text" name="zip" ><br>
<br>
<input type="submit">
</form>


<a href="ShoppingCart.php" target="_blank">Return to My Cart</a>
<!--$street = $_SESSION['street'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$zip = $_SESSION['zip'];-->



</body>
</html>