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

<?php>
<form method="post" action="
Street: <input type="text" street="Street Address" value="<?php echo $street;?>">
City: <input type="text" city="City" value="<?php echo $city;?>">
State: <input type="text" state="State" value="<?php echo $state;?>">
ZipCode: <input type="text" zip="ZipCode" value="<?php echo $zipCode;?>">