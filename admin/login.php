<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" href="./css/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>

<body>
  <div class="wrapper">
    <?php
    session_start();
    if (isset($_POST['dangnhap'])) {
      $adminUser = $_POST['adminUser'];
      $adminPass = $_POST['adminPass'];

      if ($adminUser == 'admin@' && $adminPass == '123456') {
        $_SESSION['adminUser'] = $adminUser;
        header('location: index.php');
      }
    }
    ?>
    <form action="login.php" method="post">
      <h1>Log In Admin</h1>
      <div class="input-box">
        <input type="text" name="adminUser" placeholder="User name">
        <i class='bx bxs-user'></i>
      </div>

      <div class="input-box">
        <input type="password" name="adminPass" placeholder="Password">
        <i class='bx bxs-lock-alt'></i>
      </div>

      <div class="remember-forgot">
        <!-- <label><input type="checkbox">Remember me</label> -->
        <!-- <a href="#">Forgot password?</a> -->
      </div>

      <button type="submit" name="dangnhap" class="btn">Login</button>
      <!-- <div class="register-link">
        <p>Dont't have an acconut?
          <a href="#">Register</a>
        </p> -->
  </div>
  </form>
  </div>



</body>

</html>