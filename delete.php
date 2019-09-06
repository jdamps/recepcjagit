<?php


$con=mysqli_connect("localhost","jdamps","admin123","recepcja1");

$sql = "DELETE FROM pracownicy WHERE id_pracownik='$_GET[id]'";


if (mysqli_query($con, $sql)) 
    header("refresh:1; url=index.php");

else 
    echo "Error deleting record";


?>