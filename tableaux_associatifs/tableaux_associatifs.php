<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tableau associer</title>
</head>
<body>
    
<?php

$activites = array("Lundi"=>"Php","Mardi"=>"Javascript", "Mercredi"=>"Typescript","Jeudi"=>"Angular","Vendredi"=>"SQL","Samedi"=>"Python","Dimanche"=>"Tout");


//deux dimensions
$pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python");
$paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
$jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");

$preferences = array_merge($jacques,$paul,$pierre);

echo array_search("Tout", $activites);
echo "<br>";
echo array_search("Python", $pierre);
echo "<br>";
print_r(array_keys($jacques));
// des clés de base

var_dump($preferences);

// des nouvelles clés

var_dump(array_values($preferences));

//tableau d'association des 3 tableaux
$preferencesAssoc = ["Pierre"=>$pierre, "Paul"=>$paul, "Jacques"=>$jacques];
var_dump($preferencesAssoc);


?>
</body>
</html>