<?php
$log = mysqli_connect("localhost","root","root","epitech_tp");

if (mysqli_connect_errno()) {
    echo "Failed;", mysqli_connect_error();
}

$sql = mysqli_query($log, "SELECT nom FROM distrib");

while($row = mysqli_fetch_array($sql))
    {
        echo 
        "<a class='dropdown-item' href='#'>",$row[0],"</a>
        <div class='dropdown-divider'></div>";
    }

?>
