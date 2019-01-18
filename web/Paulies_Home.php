<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paulie Snyder's Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Paulies_Home.css" />
    <script src="Paulies_Home.js"></script>
</head>
<body>


        <div id="div1" class="Main-title">Welcome to the jungle baby!</div>
        <div id="div2" class="Body">This is the body div.</div>
        <div id="div3"  class="Contact-me">This is the contact me div.</div>

        <div id="div2" class="Body">You are sending signals from IP address: <?php echo $_SERVER['REMOTE_ADDR'] ?></div>
        <?php echo $_SERVER['REMOTE_ADDR'] ?>



    
</body>
</html>