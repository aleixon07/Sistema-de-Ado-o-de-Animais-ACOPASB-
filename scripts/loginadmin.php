<?php 
session_start();
include_once "connection.php";

if (isset($_POST['login']) && isset($_POST['password'])) {

    $login = $_POST['login'];
    $senha = $_POST['password'];

    if (empty($login)) {

        header("Location: ../form_login2.php?error=Preencha seu e-mail!");
        exit();

    } else { 
        if (empty($senha)) {
            header("Location: ../form_login2.php?error=Preencha sua senha!");
            exit();

        } else {
            $sql = "SELECT * from administrador where email = '$login' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                if (mysqli_num_rows($result)===1) {
                    $linha = mysqli_fetch_assoc($result); 
                    if ($linha['email']===$login && $linha['senha']) {
                        $_SESSION['iduser']=$linha['idadministradores'];
                        

                        header("Location: ../dashboard_/listagem_cachorro.php");
                        exit();

                    } else {
                        header("Location: ../form_login2.php?error=Senha incorreta!");
                        exit();
                    }
                } else {
                    header("Location: ../form_login2.php?error=Algo deu errado. Tente novamente!");
                    exit();
                }
            } else {
                header("Location: ../form_login2.php?error=Usuário não encontrado!");
                exit();
            }
        } 
    }

} else {
    echo "Não existe post!";
    header("Location: ../dashboard_/listagem_cachorro.php");
    exit();
}



?>