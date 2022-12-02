<?php

  session_start();
  include_once 'common/header.php';

  if (isset($_SESSION['user'])) {
    header('Location: home.php');
  }

?>

<head>
    <link rel="stylesheet" href="style.css">
  </head>

<!-- Registration form -->
  <div class="container-login">
    <div class="login">
      <h1>Registration</h1>
      <form action="" method="post" class="form-style">
        <input type="text" name="name" placeholder="Enter your name" >
        <input type="email" name="email" placeholder="Enter your email" >
        <input type="text" name="username" placeholder="Enter your Username" >
        <input type="password" name="password" placeholder="Enter your Password" >
        <input type="password" name="confirmPassword" placeholder="Confirm Password" >
        <input type="submit" name="register" value="Register">
      </form>
      <a href="login.php">Already have an account? Login here</a>
    </div>
  </div>

  <script>
    
  </script>

<?php

  include_once 'common/footer.php';

?>

