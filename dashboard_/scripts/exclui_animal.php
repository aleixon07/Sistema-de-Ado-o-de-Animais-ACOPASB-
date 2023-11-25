<?php
include '../../scripts/connection.php';

if (isset($_GET['id'])) {
    $del_id = $_GET['id'];

    $sql1 = "SELECT * FROM animal WHERE idanimal = '$del_id'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    $caminho_imagem = $row1["foto"];


    if (isset($caminho_imagem) && !empty($caminho_imagem)) {

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

    $sql_b = "SELECT * FROM animal WHERE idanimal = '$del_id'";
    $result_b = mysqli_query($conn, $sql_b);
    $row = mysqli_fetch_assoc($result_b);
    $tipo = $row['tipo'];


    if (!empty($del_id)) {
        $sql = "DELETE FROM animal WHERE idanimal = '$del_id'";

        try {
            $result = mysqli_query($conn, $sql);
        } catch (Exception $e) {
            header("Location: ../form_cadastro_animal.php?error=Erro ao deletar o animal!");
            exit();
        }

        if ($tipo == "cachorro") {
            header("Location: ../listagem_cachorro.php?l=c81e728d9d4c2f636f067f89cc14862c");
            exit();
        } else {
            header("Location: ../listagem_gato.php?l=c81e728d9d4c2f636f067f89cc14862c");
            exit();
        }
    } else {
        header("Location: ../form_cadastro_animal.php?error=Erro ao recuperar dados!");
        exit();
    }
} else {
    header("Location: ../form_cadastro_animal.php?error=Erro ao recuperar dados!");
    exit();
}
