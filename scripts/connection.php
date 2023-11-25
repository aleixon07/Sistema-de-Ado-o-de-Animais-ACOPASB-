<?php
//cada uma dessas variáveis armazena strings que serão usadas para acesso ao banco
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "acopasb";

// Cria uma instância de conexão
$conn = mysqli_connect($servername, $username, $password,$db_name);

?>