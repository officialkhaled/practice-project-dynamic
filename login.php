<?php

  session_start();
  include_once 'common/header.php';
  require_once 'models/connect.php';

  if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query
    $query = "SELECT * FROM user_data WHERE username = '$username'";
    $result = mysqli_query($con, $query);
    // Fetching data
    $fetch_data = mysqli_fetch_assoc($result);
    $num_rows = mysqli_num_rows($result);
    if ($username == "" or $password == "") {
      echo "<script>alert('Please fill all the fields')</script>";
      echo "<script>window.open('login.php','_self')</script>";
      exit();
    }
    if ($num_rows == 0) {
      echo "<script>alert('Username does not exist')</script>";
      echo "<script>window.open('login.php','_self')</script>";
      exit();
    } else if($num_rows > 0) {
      if(password_verify($password, $fetch_data['password'])) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Login Successful!')</script>";
        echo "<script>window.open('home.php','_self')</script>";
      } else {
        echo "<script>alert('Incorrect Password!')</script>";
        echo "<script>window.open('login.php','_self')</script>";
      }
    } else {
      echo "<script>alert('Incorrect Username!')</script>";
      echo "<script>window.open('login.php','_self')</script>";
    }
  }

?>


  <head>
    <link rel="stylesheet" href="style.css">
  </head>

<!-- Login form -->
  <div class="container-login">
    <div class="login">
      <h1>Login</h1>
      <form action="" method="post" name="myForm" class="form-style" onsubmit="return validateForm()">
        <input type="text" name="username" placeholder="Username" >
        <p class="msgUser"></p>
        <input type="password" name="password" placeholder="Password" >
        <p class="msgPass"></p>
        <input type="submit" name="login" value="Login">
      </form>
      <a href="register.php">Don't have an account? Register here</a>
    </div>
  </div>


  <script>
      function validateForm() {
        let x = document.forms["myForm"]["username"].value;
        let y = document.forms["myForm"]["password"].value;

        if (x === "" && y === "") {
          document.getElementsByClassName("msgUser")[0].innerHTML =
          "Username is required";
          document.getElementsByClassName("msgPass")[0].innerHTML =
          "Password is required";
          return false;
        }
        
        return (alert("Successfully logged in!"));

      }
    </script>

<?php

  include_once 'common/footer.php';

?>

