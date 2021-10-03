<?php
include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $row['name'];
    header("Location: home.php");
  } else {
    echo '<script>alert("Email or Password is incorrect!")</script>';
  }
}
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
  <section class="login">
    <div class="title">
      <h1>Login</h1>
    </div>

    <form action="" method="POST">
      <div class="login-form">
        <!-- Email -->
        <div class="email">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="<?php echo $email; ?>" required />
        </div>
        <!-- Password -->
        <div class="password">
          <label for="password" class="form-margin">Password</label>
          <input type="password" id="password" name="password" value="<?php echo $_POST['password']; ?>" required />
        </div>
        <!-- Button -->
        <a href="home.php">
          <button class="login-btn" name="submit" type="submit">Login</button>
        </a>
      </div>
    </form>

    <div class="no-account">
      <a href="register.php">Don't have an account? Register here</a>
    </div>
  </section>

  <footer class="footer-home">
    Made with ❤️ by Julyo (2301902245) - Web Programming - LF01
  </footer>
  <script src="script.js"></script>
</body>

</html>