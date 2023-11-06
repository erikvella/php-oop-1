<?php 
require_once __DIR__ . '/model/Movies.php';
require_once __DIR__ . '/model/Media.php';
require_once __DIR__ . '/db/db.php';





?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>OOP 1</title>
</head>
<body>
  <h1>Migliori film distopici</h1>

  <div class="container d-flex">
<?php foreach($Movies as $Movie): ?>
    <div class="card">
      <img src="" alt="">
      <h3>Titolo film  Genere : </h3>
      <h4>Durata : </h4>
      <p>Cast</p>
      
    </div>
<?php endforeach; ?>
    <!-- fine container -->
  </div>
</body>
</html>