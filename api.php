<?php 

  include __DIR__ . '/data/db.php';
 
  $genres = [];
  $dischi = empty($_GET['genre']) || $_GET['genre'] === 'all' ?$database :[];
  

  foreach($database as $disc){

    if(!in_array($disc['genre'], $genres)){
      $genres[] = $disc['genre'];
    }

  }

  if(count($dischi) === 0){
    foreach($database as $disc){
      if($disc['genre'] === $_GET['genre']){
        $dischi[] = $disc;
      }
    }
  }

  $response = [
    'disc' => $dischi,
    'genres' => $genres,
  ];




  header('Content-Type: application/json');
  echo json_encode($response);

?>