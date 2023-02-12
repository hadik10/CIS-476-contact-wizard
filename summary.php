<?php 
session_start();

if (!isset($_SESSION['first_name']) || !isset($_SESSION['email']) || !isset($_SESSION['gmail'])|| !isset($_SESSION['phone'])) {
  header('Location: index.php');
  exit;
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Summary</title>
    <style>
            body {
                background-color: lightpink;
            }
            form {
                margin: 50px auto;
                width: 500px;
                text-align: center;
            }
            h1 {
                text-align: center;
            }
            p{
                text-align: center;
               background-color: lightblack;
                width: 200px;
                border: 10px solid whitesmoke;
                padding: 10px;
                margin: auto;
            }
        </style>
  </head>
  <body>
    <h1>Summary</h1>
    <p>First Name: <?php echo $_SESSION['first_name']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <p>Gmail: <?php echo $_SESSION['gmail']; ?></p>
    <p>Phone Number : <?php echo $_SESSION['phone']; ?></p>
    <h1>Did you like my design..!</h1>
  </body>
</html>
