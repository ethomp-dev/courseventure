<?php

  $dsn = 'mysql:host=localhost;dbname=courseventure';
  $username = 'root';
  $password = '';

  try {
      $db = new PDO($dsn, $username, $password);
  } catch (PDOException $e) {
      exit();
  }

?>
