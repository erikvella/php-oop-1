<?php 
require_once __DIR__ . '/model/Movie.php';
require_once __DIR__ . '/model/Media.php';
require_once __DIR__ . '/db/db.php';
require_once __DIR__ . '/model/Production.php';


die;

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
      <img src="img/<?php echo $Movie->image->imgName ?>" alt="<?php echo $Movie->image->imgName ?>">
      <h3>Titolo: <?php echo $Movie->title ?> <br> Genere: <?php echo $Movie->genere ?></h3>
      <h4>Durata : <?php echo $Movie->durata ?></h4>
      <p><strong>Cast: </strong><?php echo implode(', ' , $Movie->attori) ?></p>
      
    </div>
<?php endforeach; ?>
    <!-- fine container -->
  </div>
</body>
</html>