<!DOCTYPE html>
<html>
        <head>
            <title>PREMIERS PAS EN PHP</title>

        </head>

<?php

    if (isset($_POST['prenom']))
    {
        echo $_POST['prenom'];
    }

    echo $_POST['sexe']
?>

        <body> 



<form action="" method="post" name="formulaire"> 
Prénom : <input type="text" name="prenom" value="">   
<br />
Sexe : 
<input type="radio" name="sexe" value="F">Fille 
<input type="radio" name="sexe" value="M">Mec     
<br />

Pays : 
<select name="pays">
    <option value="france">France</option>
    <option value="belgique">Belgique</option>
    <option value="suisse">Suisse</option>
    <option value="canada">Canada</option>
</select>
<br />

Inscription newsletter : 
<input type="checkbox" name="newsletter" value="oui" />
<br />

<input type="submit" value="Envoyer">


</form> 


</tbody>
</table>



    </body>
</html>