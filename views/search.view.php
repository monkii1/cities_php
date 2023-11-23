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
      <?php foreach($alphabet AS $firstChar): ?>
        <a href="index.php?<?php echo http_build_query(['char' => $firstChar]);?>">
          <?php echo e($firstChar);?>
        </a>
      <?php endforeach;?>
    </nav>
  </header>
  <main>
    <h1>TODO: Suchformular</h1>
  </main>
</body>
</html>