<?php
$log = mysqli_connect("localhost","root","root","epitech_tp");

if (mysqli_connect_errno()) 
{
    echo "Failed;", mysqli_connect_error();
}

$abo = $_POST['abo'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];


$sql = "SELECT fiche_personne.nom, fiche_personne.prenom, abonnement.nom FROM membre 
    INNER JOIN abonnement ON membre.id_abo = abonnement.id_abo 
    INNER JOIN fiche_personne ON membre.id_fiche_perso = fiche_personne.id_perso
    WHERE fiche_personne.nom LIKE ?
    AND fiche_personne.prenom LIKE ?";

$stmt = mysqli_prepare($log, $sql);
mysqli_stmt_bind_param($stmt, 'ss', $nom,$prenom);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $c1, $c2, $c3);

// echo "<h1 class='genre'>$_POST['Nom']$POST_['Prenom']</h1>";

echo"   
        <table class='table table-dark'>
        <tr class=impair>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Abonnement</th>
            <th>Ajouter</th>
            <th>Supprimer</th>
        </tr>";

while(mysqli_stmt_fetch($stmt))
{       
        echo 
        "<tr class= paire>
            <td>",$c1,"</td>
            <td>",$c2,"</td>
            <td>",$c3,"</td>
            <td><a href='#'><span class='glyphicon glyphicon-plus-sign '></span></a></td>
            <td><a href='#'><span class='glyphicon glyphicon-minus-sign'></span></a></td>
        </tr>";
}

    

    echo"</table>";
    // echo "<p>",$row['titre'],"</p>";
    // echo "<p>",$test,"</p>";

mysqli_free_result($res);
mysqli_close($log);

?>