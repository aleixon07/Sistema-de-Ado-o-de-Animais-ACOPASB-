<?php

session_start();
include_once "connection.php";

if (isset($_POST['nome']) && isset($_POST['id_pet']) && isset($_POST['data']) && isset($_POST['horario']) && isset($_POST['telefone']) && isset($_POST['email'])) {

    $nome = $_POST['nome'];
    $id_pet = $_POST['id_pet'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];


    if (!empty($nome) && !empty($id_pet) && !empty($data) && !empty($horario) && !empty($telefone) && !empty($email)) {

        $sql = "INSERT INTO agendamentos (nome, idanimal, data, hora, telefone, email) VALUES ('$nome', '$id_pet', '$data', '$horario', '$telefone', '$email')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: ../index-2.php?l=c4ca4238a0b923820dcc509a6f75849b");
            exit();
        }
    } else {
        header("Location: ../index-2.php?campo_nao_preenchido");
        exit();
    }
} else {
    header("Location: ../index-2.php?sem_post");
    exit();
}
