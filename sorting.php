<?php
  $numbers = array( 3, 2, 1 );  
  sort($numbers);
  print_r($numbers); 
  echo "<br>";

  // Associative array declarations
  $fav_animals["Tom"] = "Koala"; 
  $fav_animals["Dick"] = "Wedge Tail Eagle";
  $fav_animals["Harry"] = "Great White Shark";
  var_dump($fav_animals);
  echo "<br>"; 

  // Sort fav_animal array by value
  asort($fav_animals);
  print_r($fav_animals);
  echo "<br>";

  // Sort fav_animal array by key
  ksort($fav_animals);
  print_r($fav_animals);
?>