<?php

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$foto = filter_input(INPUT_POST, 'foto', FILTER_SANITIZE_STRING);
$causo = filter_input(INPUT_POST, 'causo', FILTER_SANITIZE_STRING);

$materia_blog = "INSERT INTO blog-Sandro (titulo, autor, data, foto, causo) VALUES ('$titulo', '$autor', '$data', '$foto', '$causo' )";
$resutado_blog = mysql_query($conn, $materia_blog);
?>