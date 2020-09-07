<?php
//herhaling
$getal = 6;
echo gettype($getal);
echo "",PHP_EOL;

//Oefening 1
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
print_r($klas);
echo "",PHP_EOL;


//Oefening 2
for ($i=0; $i <4 ; $i++) {
  print $klas[$i];
  echo "",PHP_EOL;
}

//Oefening 3
foreach ($klas as $value) {
  echo "",PHP_EOL;
  print $value;
  echo "",PHP_EOL;
}

//Combinatie Opdracht
$bucket_list =[];
$hoeveelheid_activiteiten = readline("Hoeveel activiteiten wil je toevoegen aan de Bucket List?");
for ($i=0; $i < $hoeveelheid_activiteiten; $i++) {
  $activity = readline("Welke activiteiten wil je toevoegen?");
  array_push($bucket_list, $activity);
}

var_dump($bucket_list);

foreach ($bucket_list as $value) {
  print $value;
  echo "",PHP_EOL;
}


?>
