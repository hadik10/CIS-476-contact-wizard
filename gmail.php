<?php 
session_start();

if (!isset($_SESSION['first_name']) || !isset($_SESSION['email'])) {
  header('Location: index.php');
  exit;
}

if (isset($_POST['gmail'])) {
    if (strpos($_POST['gmail'], '@') !== false)
  $_SESSION['gmail'] = $_POST['gmail'];
  header('Location: phone.php');
  exit;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>gmail</title>
        <style>
            body {
                background-color: lightgreen;
            }
            form {
                margin: 50px auto;
                width: 500px;
                text-align: center;
            }
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>hgupta_Wizard</h1>
        <form action="gmail.php" method="post">
            G-mail:<input type="email" name="gmail" id="gmail" required>
            <input type="submit" name="Submit">
  
        </form>  
    </body>
</html>
