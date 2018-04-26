

<?php

$x = $_POST["a"];
$y = $_POST["b"];
$z = $_POST["c"];
$u = $_POST["d"];
$v = $_POST["e"];
$t = $_POST["f"];


echo $x.$y.$z.$u.$v.$t;

$conn= mysqli_connect("localhost","root","","registration");
mysqli_query($conn,"insert into entries values ('$x','$y','$z','$u','$v','$t')");

?>