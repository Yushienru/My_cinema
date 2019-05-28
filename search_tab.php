<?php
$log = mysqli_connect("localhost","root","root","epitech_tp");

if (mysqli_connect_errno()) 
{
    echo "Failed;", mysqli_connect_error();
}

$clc = $_SERVER['REQUEST_URI'];
$str = parse_str('genre=animation');
$str2 = parse_url($clc, PHP_URL_QUERY);

$pos = substr($str2, strpos($str2, "="));
$str3 = substr($str2, $pos+6);
$str3 = str_ireplace("%20", " ", $str3);
// echo "<h1 class='genre'>$str3</h1>";
$str3 = "%" . $str3 . "%";

$sql = "SELECT titre, genre.nom, resum, duree_min, annee_prod FROM film
LEFT JOIN genre ON film.id_genre = genre.id_genre 
LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib 
WHERE titre LIKE ?;";
$stmt = mysqli_prepare($log, $sql);

mysqli_stmt_bind_param($stmt, 's', $str3);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $c1, $c2, $c3, $c4, $c5);

echo"   
        <table class='table table-dark'>
        <tr class=impair>
            <th>Titres</th>
            <th>Genre</th>
            <th>Résumés</th>
            <th>Durée min</th>
            <th>Année</th>
        </tr>";

while(mysqli_stmt_fetch($stmt))
    {
        echo 
        "<tr class= paire>
            <td>",$c1,"</td>
            <td>",$c2,"</td>
            <td>",$c3,"</td>
            <td>",$c4,"</td>
            <td>",$c5,"</td>
        </tr>";

    }

    // echo"</table>";
    // echo "<p>",$row['titre'],"</p>";
    // echo "<p>",$test,"</p>";

mysqli_free_result($res);
mysqli_close($log);

?>