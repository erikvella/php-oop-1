<?php 

try{
  require_once __DIR__ . '/traits/annoPubblicazione.php';
  require_once __DIR__ . '/model/Production.php';
  require_once __DIR__ . '/model/Movie.php';
  require_once __DIR__ . '/model/SerieTv.php';
  require_once __DIR__ . '/model/Media.php';
  require_once __DIR__ . '/db/db.php';
  
}catch(Exception  $e){
$error = $e -> getMessage();
}


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
  <h1>Prodotti audiovisivi</h1>


<!-- qui imposto il mio alert per gli errori -->
<?php if(isset($error)): ?>
<div class="alert">
<?php echo $error ?>
</div>
<?php else: ?>


<!-- qui inizia la pagina con le card di tutti i prodotti -->
  <div class="container d-flex">
<?php foreach($Movies as $Movie): ?>
    <div class="card">
      <img src="img/<?php echo $Movie->image->imgName ?>" alt="<?php echo $Movie->image->imgName ?>">
      <h3>Titolo: <?php echo $Movie->title ?> <br> Genere: <?php echo $Movie->genere ?></h3>
      <h4>Durata : <?php echo $Movie->running_time ?></h4>
      <h4>Anno di uscita : <?php echo $Movie->published_year ?></h4>
      <p><strong>Cast: </strong><?php echo implode(', ' , $Movie->attori) ?></p>
      
    </div>
<?php endforeach; ?>


<?php foreach($SerieTvs as $SerieTv): ?>
    <div class="card">
      <img src="img/<?php echo $SerieTv->image->imgName ?>" alt="<?php echo $SerieTv->image->imgName ?>">
      <h3>Titolo: <?php echo $SerieTv->title ?> <br> Genere: <?php echo $SerieTv->genere ?></h3>
      <h4>Anno prima messa in onda : <?php echo $SerieTv->published_year ?></h4>
      <h4>Anno ultima messa in onda : <?php echo $SerieTv->aired_to_year ?></h4>
      <h4>Numero di puntate : <?php echo $SerieTv->number_of_episodes ?></h4>
      <h4>Numero di stagioni : <?php echo $SerieTv->number_of_seasons ?></h4>
      <p><strong>Cast: </strong><?php echo implode(', ' , $SerieTv->attori) ?></p>
      
    </div>
<?php endforeach; ?>
    <!-- fine container -->
  </div>

  <?php endif; ?>
</body>
</html>