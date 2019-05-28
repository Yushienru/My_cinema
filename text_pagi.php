<?php
$log = mysqli_connect('localhost','root',"root","wac_exam");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL; ", mysqli_connect_error();
}
//recup des titre de la table film
$total=mysqli_query($log,"SELECT id_film from film");
$nr = mysqli_num_rows($total);
//echo $nr;
//on a 3680
$items_per_page=8;
$totalpages=ceil($nr/$items_per_page);
if(isset($_GET['page']) && !empty($_GET['page'])) 
{
    $page=$_GET['page'];
}
else 
$page=1;
$offset=($page-1) *$items_per_page;
$sql = mysqli_query($log,"SELECT *, mytable.poster_path from film LEFT JOIN mytable ON film.titre LIKE mytable.original_title ORDER BY id_film LIMIT $items_per_page OFFSET $offset");
$row_count=mysqli_num_rows($sql);

while ($row=mysqli_fetch_assoc($sql))
echo " <div class='d-inline-flex card m-3'>
<h3 class='card-header'>".$row['titre']."</h3>
<img class='card-img-top' src='https://image.tmdb.org/t/p/original" . $row['poster_path'] . "' alt='Card image cap' >
    <div class='card-body'>
        <h5 class='card-title'>".$row['annee_prod']."</h5>
        <p class='card-text'>".$row['resum']."</p>
        <h5 class='card-footer'>NOTE</h5>

    </div>
</div>";
 echo "<div class='col-lg-12'>
 <ul class='pagination pagination-sm sync-pagination'>";
 echo "<li class='page-item'><a href='/Projets/my_cinema/index.php?page=".($page - 1)."'>Page prec.</a></li>";
    for ($i=1;$i<=10;$i++)
    {
        if($i==$page)
        echo "<li class='page-item'><a class='active'>".$i."</a></li>";
        else 

        echo "<li class='page-item'><a href='/Projets/my_cinema/index.php?page=".$i."'>".$i."</a></li>";
    }
    echo "<li class='page-item'><a href='/Projets/my_cinema/index.php?page=".($page + 1)."'>Page suiv.</a></li>";
 echo "</ul>
 </div>";
?>