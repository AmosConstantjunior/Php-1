<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
       $hello = "Hello";
//Afficher la variable $hello//
       $pom = "le monde est petit";
       echo "<h1> trump a dit $pom </h1>";
//    Variable numeriques
       $montantHt = 15.2;
       $prixTTC = 18.24;
       echo "<h3> le prix TTC correspondant est de $prixTTC </h3>";

//    TABLEAU

       

       

       $jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    //    ajouter un élément
       array_push($jours,"Dimanche");
    //    Parcourir les element du tableau
       $arlong = count($jours);
       for ($t=0; $t < $arlong; $t++) { 
           echo $jours[$t];
           echo "<br>";
        }
        // Supprimer  le dernier element du tableau
        array_pop($jours);
        $long = count($jours);
       for ($t=0; $t < $long; $t++) { 
           echo $jours[$t];
           echo "<br>";
        }
        echo"<br>";

        // Array Shift 

        array_shift($jours);
        $long = count($jours);
       for ($t=0; $t < $long; $t++) { 
           echo $jours[$t];
           echo "<br>";
        }
       
    //    array_slice(), 
    $long = count($jours);
    for ($t=0; $t < $long; $t++) { 
        echo $jours[$t];
        echo "<br>";
    }
    array_slice($jours,1,2);

    //  array_splice(),
    for ($t=0; $t < $long; $t++) { 
        echo $jours[$t];
        echo "<br>";
     }

       $world = "World";
?>
</body>
</html>