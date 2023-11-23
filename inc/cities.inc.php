<?php

function get_cities_starts_with(string $char) {
  global $pdo;

  $stmt = $pdo->prepare('SELECT * FROM `cities` WHERE `title` LIKE :char');
  $stmt->bindValue('char', $char);
  $stmt->execute();

  return $stmt;
  };