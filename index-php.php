<?php 
    include __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
<header class="d-flex justify-content-between align-items-center ps-5 pe-5">
     <div>
          <img src="img/spotify-logo.png" alt="spotify-logo">
     </div>
  </header>
  <main class="container mt-5">
    <div class="d-flex flex-wrap">

    <?php foreach($database as $data){ ?>
     <div class="disc p-3">
         <div class="p-3 text-center">
         <img src="<?php echo $data['poster'] ?>" alt="poster">
         <h5> <?php echo $data['title'] ?> </h5>
         <h6> <?php echo $data['year'] ?> </h6>
      </div>
     </div>
    <?php } ?>
    </div>
</main>
</body>
</html>