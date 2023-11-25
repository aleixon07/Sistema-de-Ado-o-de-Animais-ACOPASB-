<?php
session_start();
include_once "../../scripts/connection.php";

if (isset($_POST['idanimal'])) {

    // Atribuindo os valores passados por POST às variáveis
    $id_edit = $_POST['idanimal'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $tipo_animal = $_POST['tipo'];
    $vacina = $_POST['vacina'];
    $descricao = $_POST['descricao'];
    $vermifugacao = $_POST['vermifugacao'];
    $castracao = $_POST['castracao'];
    $raca = $_POST['raca'];



    $imagem = $_FILES['imagem'];
    $nomeimagem = uniqid($imagem["name"]) . ".jpeg";
    $nome_imagem = $imagem["name"];


    $sql1 = "SELECT * FROM animal WHERE idanimal = '$id_edit'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    $caminho_imagem = $row1["foto"];


    // A função EMPTY testará se algum campo foi deixado em branco

    if (empty($idade)) {
        header("Location: ../form_edita_animal.php?error=Preencha a idade do animal!&id=$id_edit");
        exit();
    }

    if (empty($sexo)) {
        header("Location: ../form_edita_animal.php?error=Preencha o sexo do animal!&id=$id_edit");
        exit();
    }

    if (empty($tipo_animal)) {
        header("Location: ../form_edita_animal.php?error=Selecione o tipo do animal!&id=$id_edit");
        exit();
    }

    if (empty($descricao)) {
        header("Location: ../form_edita_animal.php?error=Preencha a descrição do animal!&id=$id_edit");
        exit();
    }

    if (empty($vermifugacao)) {
        header("Location: ../form_edita_animal.php?error=Informe se o animal é vermifugado!&id=$id_edit");
        exit();
    }

    if (empty($vermifugacao)) {
        header("Location: ../form_edita_animal.php?error=Informe se o animal é vermifugado!&id=$id");
        exit();
    }

    if (empty($castracao)) {
        header("Location: ../form_edita_animal.php?error=Informe se o animal é castrado!&id=$id");
        exit();
    }


    if (isset($caminho_imagem) && !empty($nome_imagem)) {

        $caminhoArquivo = "../../img/animais/$caminho_imagem";

        if (file_exists($caminhoArquivo)) {
            if (unlink($caminhoArquivo)) {
                echo 'Arquivo de foto excluído com sucesso.';
            } else {
                echo 'Erro ao excluir o arquivo de foto.';
            }
        } else {
            echo 'O arquivo de foto não existe.';
        }
    }

    if (!empty($nome_imagem)) {
        $diretorioDestino = "../../img/animais/";
        $tipo = $imagem["type"];
        $tamanho = $imagem["size"];
        $tmp_name = $imagem["tmp_name"];

        $caminhoDestino = $diretorioDestino . $nomeimagem;
        if (move_uploaded_file($tmp_name, $caminhoDestino)) {
            echo "Imagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar a imagem.";
        }

        $sql = "UPDATE animal SET 
                nome = '$nome',
                idade = '$idade',
                sexo = '$sexo',
                tipo = '$tipo_animal',
                vacinas = '$vacina',
                descricao = '$descricao',
                vermifugado = '$vermifugacao',
                castracao = '$castracao',
                foto = '$nomeimagem',
                raca = '$raca'
                WHERE
                idanimal = '$id_edit'";

        } else if (empty($nome_imagem)) {

        $sql = "UPDATE animal SET 
        nome = '$nome',
        idade = '$idade',
        sexo = '$sexo',
        tipo = '$tipo_animal',
        vacinas = '$vacina',
        descricao = '$descricao',
        vermifugado = '$vermifugacao',
        castracao = '$castracao',
        foto = '$caminho_imagem',
        raca = '$raca'
        WHERE
        idanimal = '$id_edit'";
    }

    try {
        $result = mysqli_query($conn, $sql);
    } catch (Exception $e) {
        header("Location: ../form_edita_animal.php?error2=Erro de comunicação com o banco de dados. Tente novamente mais tarde!&id=$id");
        exit();
    }


    if ($tipo_animal == "cachorro") {
        header("Location: ../listagem_cachorro.php?l=eccbc87e4b5ce2fe28308fd9f2a7baf3");
        exit();
    } else {
        header("Location: ../listagem_gato.php?l=eccbc87e4b5ce2fe28308fd9f2a7baf3");
        exit();
    }
} else {
    header("Location: ../form_edita_animal.php?error=Erro na edição. Tente novamente mais tarde!&id=$id");
    exit();
}
