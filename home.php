<?php

  session_start();
  
  if (isset($_SESSION['username'])) {
    header("Location: index.php");
  }

?>


<html>
<head>
  <title>HOME</title>
</head>

<body>
  <!-- Home Page design using HTML -->
  <div class="main-content">
    <div class="container">
      <h1>Welcome to the Home Page</h1>
      <p>Click on the button below to logout</p>
      <a href="logout.php"><button>Logout</button></a>
      <!--<a href="logout.php"><button>Logout</button></a>-->
    </div>
  </div>
  
</body>
</html>