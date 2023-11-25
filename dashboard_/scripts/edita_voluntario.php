<?php
include_once "../../scripts/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $dias_voluntario = $_POST["dias_voluntario"];
    $telefone = $_POST["telefone"];
    $idvoluntarios = $_POST["idvoluntarios"];
    $comentario = $_POST["comentario"];
    
    $sql = "UPDATE voluntarios SET 
    nome = '$nome',
    email = '$email',
    endereco = '$endereco',
    dias_voluntariado = '$dias_voluntario',
    telefone = '$telefone',
    comentario = '$comentario'
    WHERE
    idvoluntarios = '$idvoluntarios'";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location: ../listagem_voluntario.php?l=eccbc87e4b5ce2fe28308fd9f2a7baf3");
        exit();
    }


} else {
    // Caso o formulário não tenha sido submetido
    echo "Por favor, preencha o formulário e envie os dados.";
}

?>