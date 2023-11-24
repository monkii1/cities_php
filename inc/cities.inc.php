<?php

function get_cities_starts_with(string $char): ?array {
  global $pdo;

  $alphabet = generate_alphabet();
  if(!in_array($char, $alphabet)){
    return null;
  }

  $stmt = $pdo->prepare('SELECT * FROM `cities` WHERE `title` LIKE :title ORDER BY `title` ASC, `zip` ASC');
  $stmt->bindValue('title', $char . '%');
  $stmt->execute();

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  return $results;
  };

  function get_city(string $search): ?array {
    global $pdo;

    $stmt = $pdo->prepare('SELECT * FROM `cities` WHERE `title` LIKE :title ORDER BY `title` ASC, `zip` ASC');
    $stmt->bindValue('title', '%' . $search . '%');
    $stmt->execute();
  
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    return $result;
  };