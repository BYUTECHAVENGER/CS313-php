<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paulie Snyder's Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="stylesheetID" rel="stylesheet" type="text/css" media="screen" href="Paulies_Home.css" />
    <script src="Paulies_Home.js"></script>
</head>
<body>


        <div id="div1" class="Main-title">CS 313
            Paulie Snyder
        </div>
        <a href="Assignments.html" >Teleport to Paulie's Assignments page </a>
        <div id="div2" class="Body">This is the body div.</div>
        <img src="eLessonPlan thumb.JPG" title="My BEST work ever" class="center">
        <div id="div3"  class="Contact-me">Paulie Snyder<br />sny17007@byui.edu<br />www.linkedin.com/in/pauliesnyder</div>
        <button onclick="remove_stylesheet ();">Click here to view in text only mode</button><br />
        <div id="div2" class="Body">You are sending signals from IP address: <?php echo $_SERVER['REMOTE_ADDR'] ?></div>
        
        
        <?php echo $_SERVER['REMOTE_ADDR'] ?>



    
</body>
</html>