<?php

  $dsn = 'mysql:host=localhost;dbname=courselist_8016';
  $username = 'root';
  $password = '';

  try {
      $db = new PDO($dsn, $username, $password);
  } catch (PDOException $e) {
      exit();
  }

?>
