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
    <form action="search.php" method="GET">
      <input type="text" name="search" required value="<?php echo e($searchValue ?? '');?>">
      <input type="submit" value="Suchen">
    </form>
  </header>
  <main>
    
    <?php echo $content; ?>

  </main>
</body>
</html>