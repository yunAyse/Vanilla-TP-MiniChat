<?php

try {

$dsn = 'mysql:local=localhost;dbname=tp_minichat';

$user = 'root';

$password = '';

$db = new PDO ($dsn, $user , $password);
} catch (Exception $message) {
  echo 'error' . $message ;
}

