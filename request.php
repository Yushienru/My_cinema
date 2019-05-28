<?php
$log = mysqli_connect("localhost","root","root","epitech_tp");

if (mysqli_connect_errno()) {
    echo "Failed;", mysqli_connect_error();
}

$sql = mysqli_query($log,"SELECT titre , genre.nom , distrib.nom , resum , duree_min , annee_prod
FROM film 
LEFT JOIN genre ON film.id_genre = genre.id_genre 
LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib");

echo"<table id='tableau' class='table table-dark'>
    <thead>
        <tr class=impair>
            <th>Titres</th>
            <th>Résumés</th>
            <th>Genres</th>
            <th>Années de production</th>
        </tr>
    </thead>
<tbody>";
while($row = mysqli_fetch_array($sql))
    {
        echo 
        "<tr class='paire'>
            <td>",$row['titre'],"</td>
            <td>",$row['resum'],"</td>
            <td>",$row[1],"</td>
            <td>",$row['annee_prod'],"</td>
        </tr>";

    }
    echo"</tbody>";
    echo"</table>";


?>