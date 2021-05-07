<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    </head>
<body>

<?php
//Exercice 1
$tabJours = ["lundi", "mardi", "mercredi", 
                "jeudi", "vendredi", "samedi", 
                "dimanche"];

        $tabMois = ["janvier", "février", "mars", "avril", "mai", 
                    "juin", "juillet", "août", "septembre", "octobre", 
                    "novembre", "décembre"];
        
        $dateJour = date("N/m/Y/d"); 
        
        $today = new DateTime();
        $jour = $today->format('N') - 1;
        $mois = $today->format('m') - 1;
        echo "Nous sommes le ".$tabJours[$jour]." ".$today->format('d')." ".$tabMois[$mois]." ".$today->format('Y').".";

 ?>
 <br>
 <?php
// Exercice 2 



$dateObj = new DateTime('2021-05-04');

echo "2019-07-14, semaine nº : ".$dateObj->format('W').".";
   
   
?> 

   <br>


<?php

//Exercice 3

$finForm = new DateTime('2021-08-13');
        $today = new DateTime();

        $temps = $finForm->diff($today);
        /* var_dump($temps); */ 
        echo "Il reste ".$temps->days." jours.";
?>
<br>
<?php

//Exercice 4

$today = time();
        $finForm = intval(date(mktime(0, 0, 0, 3, 4, 2021)));
        $temps = intval(($finForm - $today) / 86400); 
        echo "Il reste ".$temps." jours.";

?>

<br>

<?php

//Exercice 5

$today = new DateTime();
        $today = $today->modify('+1 years');
        while ($today->format('L') != 1) 
            $today = $today->modify('+1 years');

        echo "La prochaine année bissextile est ".$today->format('Y').".";

?>

<br>

<?php

//Exercice 6

$dateError = DateTime::createFromFormat("d/m/Y", '17/17/2019'); 
        $Error = $dateError->getLastErrors(); 

        if ($Error["warning_count"] > 0)
            echo $Error["warnings"][10];
        

?>

<br>

<?php

//Exercice 7

$today = new DateTime();
        $today = $today->modify('+1 hours');
        $heure = $today->format("H\hi"); 
        echo $heure;

?>

<br>

<?php

//Exercice 8

$today = new DateTime();
$today = $today->modify('+1 month');
echo $today->format('d/m/Y');


?>


</body>
</html>

