<!DOCTYPE HTML>
<?php
$Majors=array("CS"=>"Computer Science","WDD"=> "Web Design and Development","CIT"=>"Computer Information Technology", "CE"=>"Computer Engineering", "SE"=>"Software Engineering");







?>
	<html lang="en-us">
		<head>
			<meta charset="utf-8">
			<title>PHP Form Activity</title>

		</head>
		<body> 
            <h1> Form Activity</h1>
            <form method="post" action="userInfo.php">
                
                <p>User Name</p>
                <input type="text" name="userName"><br>
                
                <p>User Email</p>
                <input type="email" name="userEmail"><br>
                
                <p>User Major</p>
                    <?php
                    foreach($Majors as $mValue)
                    
                   echo "<input type='radio' name='userMajor' value='$mValue' >$mValue<br/>";

                    ?>

                   <!-- <input type="radio" name="userMajor" value="Computer Science" checked><br>Computer Science
                     <input type="radio" name="userMajor" value="Web Design and Development" checked>Web Design and Development <br>
                    <input type="radio" name="userMajor" value="Computer Information Technology" checked>Computer Information Technology <br>
                    <input type="radio" name="userMajor" value="Computer Engineering" checked>Computer Engineering <br>
                    <input type="radio" name="userMajor" value="Software Engineering" checked>Software Engineering <br>
-->
                <p>User Comments</p>
                <textarea name="userComments" rows="10" cols="30">Insert your comments here.</textarea>
                
                <p>User Continents</p>
<!-- Would this make an array? How to package and unpackage that in PHP? -->             
                <p>Hold down the Ctrl key to make multiple selections. </p>
                <select name="userCont[]" size="7" multiple>
                    <option value="NA">North America</option>
                    <option value="SA">South America</option>
                    <option value="EU">Europe</option>
                    <option value="AS">Asia</option>
                    <option value="AU">Australia</option>
                    <option value="AF">Africa</option>
                    <option value="AN">Antarctica</option>
                </select>
                 <input type="submit" value="Submit">
            </form>
            
		</body>	
	</html>