<?php
session_start();
// include 'config.php';
// $name = $_POST['name'];
// $sql = "SELECT * FROM users WHERE name='$name'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="home">
    <h1><?php echo "Hello, " . $_SESSION['name'] . " Welcome to Home Page!"; ?></h1>
    <p>
      There is nothing you can see at here, just logout by click the button in
      the down below :)
    </p>
    <button class="logout-btn" type="submit">Log Out</button>
  </div>

  <footer class="footer-home">
    Made with ❤️ by Julyo (2301902245) - Web Programming - LF01
  </footer>
  <script src="script.js"></script>
</body>

</html>