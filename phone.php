<?php 
session_start();

if (!isset($_SESSION['first_name']) || !isset($_SESSION['email'])|| !isset($_SESSION['gmail'])) {
  header('Location: index.php');
  exit;
}

if (isset($_POST['phone'])) {
  $_SESSION['phone'] = $_POST['phone'];
  header('Location: summary.php');
  exit;
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Phone</title>
    <style>
            body {
                background-color: lightyellow;
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
    <h1>Welcome, <?php echo $_SESSION['first_name']; ?></h1>
    <form action="phone.php" method="post">
      <!--<label for="phone">Phone:</label>-->
     Phone Number: <input type="tel" name="phone" id="phone" required>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
