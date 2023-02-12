<?php 
session_start();

if (isset($_POST['first_name'])) {
  $_SESSION['first_name'] = $_POST['first_name'];
  header('Location: email.php');
  exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <style>
            body {
                background-color: red;
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
    <form action="index.php" method="post">
        <!--<label for="first_name">First Name:</label>-->
     First Name: <input type="text" name="first_name" id="first_name" required>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
