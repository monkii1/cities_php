<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cities</title>
  <link rel="stylesheet" href="./styles/simple.css">
</head>
<body>
  <header>
    <h1>Städte-Verzeichnis</h1>
    <p>Hier finden Sie eine Uebersicht aller Staedte in Deutschland</p>
    <nav>
      <?php foreach($alphabet AS $char): ?>
        <a href="index.php?<?php echo http_build_query(['char' => $char]);?>">
          <?php echo e($char);?>
        </a>
      <?php endforeach;?>
    </nav>
  </header>

  <ul>
    <?php foreach($cities AS $citie): ?>
      
      <?php 
        $town = (explode(',', $citie['title']));
      ?>
      <li>
        <a href="">
          <?php echo e($town[0]);?>
        </a>
      </li>
    <?php endforeach;?>
  </ul>
</body>
</html>