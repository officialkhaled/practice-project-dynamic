<?php

  $host = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'dynamic_db';

  function getConnection() {
    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    
    return $con;
  }

?>