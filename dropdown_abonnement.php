<?php
$log = mysqli_connect("localhost","root","root","epitech_tp");

if (mysqli_connect_errno()) 
{
    echo "Failed;", mysqli_connect_error();
}

$sql = mysqli_query($log,"SELECT nom FROM abonnement");
$row = urldecode($row);
while($row = mysqli_fetch_array($sql))
    {
        echo "<option>",$row['nom'],"</option>";
    }
?>