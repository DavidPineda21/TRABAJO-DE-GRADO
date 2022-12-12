<?php 



$conn = new mysqli("localhost", "root", "", "parchese");
if ($conn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}






 ?>