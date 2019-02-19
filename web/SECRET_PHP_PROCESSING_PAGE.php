<?php
// # Heroku information for query
// try
// {
//   $dbUrl = getenv('DATABASE_URL');

//   $dbOpts = parse_url($dbUrl);

//   $dbHost = $dbOpts["host"];
//   $dbPort = $dbOpts["port"];
//   $dbUser = $dbOpts["user"];
//   $dbPassword = $dbOpts["pass"];
//   $dbName = ltrim($dbOpts["path"],'/');

//   $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $ex)
// {
//   echo 'Error!: ' . $ex->getMessage();
//   die();
// }


#XAMPP information for query
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php project'; // replace with the name of the database you created on xampp MySQL

try {
    $db = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$results=$_GET['item_name'];



$item_name = $_POST['item_name'];
$db->query ("INSERT INTO item (item_name, expiration, disposal_method, recieved_date, quantity, storage_type, notes)
VALUES ('item_name', 'expiration', 'BIO DSIPOSAL', '2018-12-31', 'quantity', 'dry storage', 'storage_type')");





?>