<?php

include_once "../../scripts/connection.php";

session_start();

if (isset($_POST['idade'])) {

    // Atribuindo os valores passados por POST às variáveis
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $tipo_animal = $_POST['tipo'];
    $sexo = $_POST['sexo'];
    $vacina = $_POST['vacina'];
    $descricao = $_POST['descricao'];
    $vermifugacao = $_POST['vermifugacao'];
    $castracao =  $_POST['castracao'];
    $raca = $_POST['raca'];


    $imagem = $_FILES['imagem'];
    $nome_imagem = $imagem["name"];

    $diretorioDestino = "../../img/animais/";

    if (isset($nome_imagem)) {
        // Obtém informações sobre o arquivo.
        $nomeimagem = uniqid($imagem["name"]) . ".jpeg";
        $tipo = $imagem["type"];
        $tamanho = $imagem["size"];
        $tmp_name = $imagem["tmp_name"];

        // Move o arquivo para o diretório de destino.
        $caminhoDestino = $diretorioDestino . $nomeimagem;
        if (move_uploaded_file($tmp_name, $caminhoDestino)) {
            echo "Imagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar a imagem.";
        }
    }

    // A função EMPTY testará se algum campo foi deixado em branco

    if (empty($idade)) {
        header("Location: ../form_cadastro_animal.php?error=Preencha a idade!");
        exit();
    }

    if (empty($sexo)) {
        header("Location: ../form_cadastro_animal.php?error=Preencha o sexo!");
        exit();
    }

    if (empty($vacina)) {
        header("Location: ../form_cadastro_animal.php?error=Preencha as vacinas!");
        exit();
    }

    if (empty($descricao)) {
        header("Location: ../form_cadastro_animal.php?error=Preencha a descrição!");
        exit();
    }

    if (empty($vermifugacao)) {
        header("Location: ../form_cadastro_animal.php?error=Informe se é vermifugado ou não!");
        exit();
    }

    if (empty($castracao)) {
        header("Location: ../form_cadastro_animal.php?error=Informe se é castrado ou não!");
        exit();
    }

    // Insere os dados no banco de dados

    if (!empty($nome)) {

        $sql = "INSERT INTO animal (nome,idade,sexo,tipo,vacinas,vermifugado,castracao,descricao,foto,raca) VALUES('$nome','$idade','$sexo','$tipo_animal','$vacina','$vermifugacao','$castracao','$descricao','$nomeimagem','$raca')";

        try {
            $result = mysqli_query($conn, $sql);
        } catch (Exception $e) {
            header("Location: ../form_cadastro_animal.php?error=Erro de comunicação com o banco de dados. Tente novamente mais tarde!");
            exit();
        }

        if ($tipo_animal == "cachorro") {
            header("Location: ../listagem_cachorro.php?l=c4ca4238a0b923820dcc509a6f75849b");
            exit();
        } else {
            header("Location: ../listagem_gato.php?l=c4ca4238a0b923820dcc509a6f75849b");
            exit();
        }
    } else {

        $sql = "INSERT INTO animal (idade,sexo,tipo,vacinas,vermifugado,castracao,descricao,foto,raca) VALUES('$idade','$sexo','$tipo_animal','$vacina','$vermifugacao','$castracao','$descricao','$nomeimagem','$raca')";

        try {
            $result = mysqli_query($conn, $sql);
        } catch (Exception $e) {
            header("Location: ../form_cadastro_animal.php?error=Erro de comunicação com o banco de dados. Tente novamente mais tarde!");
            exit();
        }

        if ($tipo_animal == "cachorro") {
            header("Location: ../listagem_cachorro.php?l=c4ca4238a0b923820dcc509a6f75849b");
            exit();
        } else {
            header("Location: ../listagem_gato.php?l=c4ca4238a0b923820dcc509a6f75849b");
            exit();
        }
    }
} else {
    header("Location: ../form_cadastro_animal.php?error=Erro no cadastro. Tente novamente mais tarde!");
    exit();
}
