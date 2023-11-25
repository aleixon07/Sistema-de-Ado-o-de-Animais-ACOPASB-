<?php
session_start();
include_once "../../scripts/connection.php";
$nomeAdotante = $_POST['nomeAdotante'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

// Conectar ao banco de dados 

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO adoção_form (nome_adotante, cpf, telefone, endereco)
VALUES ('$nomeAdotante', '$cpf', '$telefone', '$endereco')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['status'] = 'success';
    $_SESSION['message'] = 'Solicitação de adoção enviada com sucesso!';
} else {
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: listagem_adoção.php");
exit();
?>
