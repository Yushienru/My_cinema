<?php
$log = mysqli_connect("localhost","root","root","epitech_tp");

if (mysqli_connect_errno()) 
{
    echo "Failed;", mysqli_connect_error();
}

$sql = "SELECT nom, resum, prix, duree_abo FROM abonnement";

$stmt = mysqli_prepare($log, $sql);

mysqli_stmt_bind_param($stmt, 's', $sql);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $c1, $c2, $c3, $c4);

// echo "<h1 class='genre'>$_POST['Nom']$POST_['Prenom']</h1>";

echo"   
        <table class='table table-dark'>
        <tr class=impair>
            <th>Nom</th>
            <th>Résumé de l'abonnement</th>
            <th>Prix</th>
            <th>Durée abonnement</th>
        </tr>";

while(mysqli_stmt_fetch($stmt))
    {
        echo 
        "<tr class= paire>
            <td>",$c1,"</td>
            <td>",$c2,"</td>
            <td>",$c3,"</td>
            <td>",$c4,"</td>
        </tr>";

    }

    echo"</table>";
    // echo "<p>",$row['titre'],"</p>";
    // echo "<p>",$test,"</p>";

mysqli_free_result($res);
mysqli_close($log);

?>