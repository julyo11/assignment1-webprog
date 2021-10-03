<?php
include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

  if ($password == $cpassword) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO users (name, email, phone, password)
              VALUES ('$name', '$email', '$phone', '$password')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo '<script>alert("Your account has created successfully! Please login with your account!")</script>';
        $name = "";
        $email = "";
        $_POST['cpassword'] = "";
        $_POST['cpassword'] = "";
      } else {
        echo '<script>alert("Something is wrong!")</script>';
      }
    } else {
      echo '<script>alert("Email already exists!")</script>';
    }
  } else {
    echo '<script>alert("Password Not Matched!")</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <section class="register">
    <div class="title">
      <h1>Register</h1>
    </div>

    <form action="" method="POST">
      <div class="register-form">
        <!-- Name -->
        <div class="name">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" value="<?php echo $name; ?>" required />
        </div>
        <!-- Email -->
        <div class="email">
          <label for="email" class="form-margin">Email</label>
          <input type="email" id="email" name="email" value="<?php echo $email; ?>" required />
        </div>
        <!-- Phone -->
        <div class="phone">
          <label for="phone" class="form-margin">Phone Number</label>
          <input type="number" id="phone" name="phone" value="<?php echo $phone; ?>" required />
        </div>
        <!-- Password -->
        <div class="password">
          <label for="password" class="form-margin">Password</label>
          <input type="password" id="password" name="password" value="<?php echo $_POST['password']; ?>" required />
        </div>
        <div class="password">
          <label for="cpassword" class="form-margin">Confirm Password</label>
          <input type="password" id="cpassword" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required />
        </div>
        <!-- Button -->
        <a href="home.php">
          <button class="register-btn" name="submit" type="submit">Login</button>
        </a>
      </div>
    </form>

    <div class="no-account">
      <a href="login.php">Already have an account? Login here</a>
    </div>
  </section>

  <footer>Made with ❤️ by Julyo (2301902245) - Web Programming - LF01</footer>
  <script src="script.js"></script>
</body>

</html>