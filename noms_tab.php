<?php
$log = mysqli_connect("localhost","root","root","epitech_tp");

if (mysqli_connect_errno()) 
{
    echo "Failed;", mysqli_connect_error();
}

$clc = $_SERVER['REQUEST_URI'];

$prenom = "%".$_POST["Nom"]."%";
$nom = "%".$_POST["Prenom"]."%";

$sql = "SELECT nom, prenom FROM fiche_personne 
WHERE nom LIKE ? 
AND prenom LIKE ?";
$stmt = mysqli_prepare($log, $sql);

mysqli_stmt_bind_param($stmt, 'ss', $prenom, $nom);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $nom, $prenom);

// echo "<h1 class='genre'>$_POST['Nom']$POST_['Prenom']</h1>";

echo"   
        <table class='table table-dark'>
        <tr class=impair>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>";

while(mysqli_stmt_fetch($stmt))
    {
        echo 
        "<tr class= paire>
            <td>",$nom,"</td>
            <td>",$prenom,"</td>
        </tr>";

    }

    // echo"</table>";
    // echo "<p>",$row['titre'],"</p>";
    // echo "<p>",$test,"</p>";

mysqli_free_result($res);
mysqli_close($log);

?>