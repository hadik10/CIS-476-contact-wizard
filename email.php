<?php 
session_start();

if (!isset($_SESSION['first_name'])) {
  header('Location: index.php');
  exit;
}

if (isset($_POST['email'])) {
  if (strpos($_POST['email'], '@') !== false) {
    $_SESSION['email'] = $_POST['email'];
    header('Location: gmail.php');
    exit;
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Email</title>
    <style>
            body {
                background-color: lightblue;
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
    <form action="email.php" method="post">
      <!--<label for="email">Email:</label>-->
    UNA Email Address: <input type="email" name="email" id="email" required>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
