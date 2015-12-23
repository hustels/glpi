<?php
$con = mysqli_connect("localhost","root","","test");

// Check conection
if (mysqli_connect_errno())
{
    echo "No se pudo conectar a la BD: " . mysqli_connect_error();
}

?>