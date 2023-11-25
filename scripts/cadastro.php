<?php
session_start();
include_once "connection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    

    if (empty($nome)) {
        header("Location: ../cadform.php?error=Nome é obrigatório!");
        exit();
    }

    if (empty($cpf)) {
        header("Location: ../cadform.php?error=CPF é obrigatório");
        exit();
    }

    if (empty($endereco)) {
        header("Location: ../cadform.php?error=Endereço é obrigatório");
        exit();
    }
    if (empty($telefone)) {
        header("Location: ../cadform.php?error=Endereço é obrigatório");
        exit();
    }
    
    if (empty($email)) {
        header("Location: ../cadform.php?error=E-mail é obrigatório!");
        exit();

    } else {
        $sql = "SELECT * from usuario where email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result)===1) {
                $linha = mysqli_fetch_assoc($result); 
                if ($linha['email']===$email) {
                    header("Location: ../cadform.php?error=E-mail já cadastrado");
                    exit();
        } }
        $pass = password_hash($senha, PASSWORD_DEFAULT);
        $sql2 = "INSERT INTO usuario (nome, cpf,email, telefone, endereco, senha )VALUES ('$nome','$cpf', '$email', '$telefone','$endereco', '$pass')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2 ){
            header("Location: ../form_login2.php");
            exit();
        }else{
            echo"Não cadastrou!";
        }

    } }

    if (empty($senha)) {
        header("Location: ../cadform.php?error=Senha é obrigatório!");
        exit();
    } 


        header("Location: ../index-2.php"); 
        exit(); 

}else{
    echo"n entro";
}
?>
