<?php
  require __DIR__ . "/inc/all.php";


  $searchValue = (string) ($_GET['search'] ?? '');
  $city = get_city($searchValue);

  // require __DIR__ . "/views/index.view.php";

  render(__DIR__ . '/views/search.view.php',[
    'searchValue' => $searchValue,
    'city' => $city,
  ]);