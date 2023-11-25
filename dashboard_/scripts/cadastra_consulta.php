<?php

include_once "../../scripts/connection.php";

session_start();

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['data1']) && isset($_POST['hora'])) {

    // Atribuindo os valores passados por POST às variáveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data1 = $_POST['data1'];
    $hora = $_POST['hora']; 

    // A função EMPTY testará se algum campo foi deixado em branco

    if (empty($nome)) {
        header("Location: ../form_agendar.php?error=Preencha o nome!");
        exit();
    } 

    if (empty($email)) {
        header("Location: ../form_agendar.php?error=Preencha o email!");
        exit();
    } 
    
    if (empty($telefone)) {
        header("Location: ../form_agendar.php?error=Preencha o telefone!");
        exit();
    }  

    if (empty($data1)) {
        header("Location: ../form_agendar.php?error=Preencha a data!");
        exit();
    } 
    
    if (empty($hora)) {
        header("Location: ../form_agendar.php?error=Informe a hora!");
        exit();
    }  

    // Insere os dados no banco de dados

    $sql = "INSERT INTO agendamentos (nome, email, telefone, data1, hora) VALUES('$nome', '$email', '$telefone', '$data1', '$hora')"; 

    try { 
        $result = mysqli_query($conn, $sql);
    } catch (Exception $e) {
        header("Location: ../form_agendar.php?error=Erro de comunicação com o banco de dados. Tente novamente mais tarde!"); 
        exit();
    }

    header("Location: listagem_agendamento.php?success=Consulta cadastrada com sucesso!"); 
    exit(); 

} else {
    header("Location: ../form_agendar.php?error=Erro no cadastro. Tente novamente mais tarde!");
    exit();
}

?>
