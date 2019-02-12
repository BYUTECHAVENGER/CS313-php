<?php

# Heroku information for query
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}


#XAMPP information for query
/*$server = 'localhost';
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
*/

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEARCH RESULTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php  
echo "Results for the search of $results:";
echo '<br/>';
echo '<br/>';


foreach ($db->query("SELECT * FROM item WHERE item_name='$results'") as $row)
{

  echo '<b>Item Name is :  </b>' . $row['item_name'];
  echo '<br/>';
  echo '<b>Item expiration date is :  </b>' . $row['expiration'];
  echo '<br/>';
  echo '<b>Item disposal method is:  </b>' . $row['disposal_method'];
  echo '<br/>';
  echo '<b>Item received date is :  </b>' . $row['recieved_date'];
  echo '<br/>';
  echo '<b>Item quantity is:  </b>' . $row['quantity'];
  echo '<br/>';
  echo '<b>Item notes/special instructions are:  </b>' . $row['notes'];
  echo '<br/>';

}

?>




</body>
</html>