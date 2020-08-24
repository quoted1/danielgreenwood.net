<?php
  $host_name = 'db5000823181.hosting-data.io';
  $database = 'dbs728901';
  $user_name = 'dbu675406';
  $password = 'hcWa5NVCP7IlG$u';
  $connect = mysqli_connect($host_name, $user_name, $password, $database);

  if (mysqli_connect_errno()) {
    die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p >';
  }
?>