<form action="post.php" method="post" enctype="multipart/form-data">
<input type="file" name="fichier"> 

<?php 
// On ouvre le fichier moncompteur.txt
$Fichier = fopen("moncompteur.txt","r+");

// on lit le nombre indiqué dans ce fichier dans la variable
$visiteurs = fgets($Fichier,255);

// on ajoute 1 au nombre de visiteurs
$visiteurs++;

// on se positionne au début du fichier
fseek($Fichier,0);

// on écrit le nouveau nombre dans le fichier
fputs($Fichier,$visiteurs);

// on referme le fichier moncompteur.txt
fclose($Fichier);

// on indique sur la page le nombre de visiteurs
print("$visiteurs personnes sont passées par ici");

?>