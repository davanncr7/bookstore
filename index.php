<?php 
include('mysql.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>BookStore</title>
</head>
<body>
    <h1>Wellcome to BookStore</h1>
    <a href="pshell.pdf">PowerShell for professionals</a><br/><br/>
    <a href="PythonNotesForProfessionals.pdf">Python for professionals</a><br/><br/>
    <form action="#" method="post">
    <input type="text" name="email" required="required" placeholder="Please enter your email" autofocus required></input>
    <input type="submit" title="Subscribe" name="sub" value="Subscribe"></input>
    </form>
    <?php
    if (isset($_POST['sub']))
		{
			$emails = mysqli_real_escape_string($con, $_POST['email']);
			$query 		= mysqli_query($con, "INSERT INTO test.email(Email) VALUES ('$emails')");
            echo "Your subscript was success. Thank You! ";
        }
    ?>
    
</body>
</html>
