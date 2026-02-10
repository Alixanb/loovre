<?php

function connexion()
{
  $host = getenv('DB_HOST') ?: 'localhost';
  $dbname = getenv('DB_NAME') ?: 'loovre';
  $user = getenv('DB_USER') ?: 'balu_loovre';
  $password = getenv('DB_PASSWORD') ?: 'AL!x4nb_0';

  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  if ($pdo) {
    return $pdo;
  } else {
    echo '<p>Erreur de connexion</p>';
    exit;
  }
}



  