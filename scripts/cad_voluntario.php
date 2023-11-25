<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once "connection.php"; // Inclua o arquivo de conexão com o banco de dados

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $nome_comleto = $nome." ".$sobrenome;
    
    // Dias da semana em que a pessoa pode voluntariar
    $dias_voluntariado = array();
    if (isset($_POST["seg"])) {
        $dias_voluntariado[] = $_POST["seg"];
    }
    if (isset($_POST["ter"])) {
        $dias_voluntariado[] = $_POST["ter"];
    }
    if (isset($_POST["qua"])) {
        $dias_voluntariado[] = $_POST["qua"];
    }
    if (isset($_POST["qui"])) {
        $dias_voluntariado[] = $_POST["qui"];
    }
    if (isset($_POST["sex"])) {
        $dias_voluntariado[] = $_POST["sex"];
    }
    if (isset($_POST["sab"])) {
        $dias_voluntariado[] = $_POST["sab"];
    }
    if (isset($_POST["dom"])) {
        $dias_voluntariado[] = $_POST["dom"];
    }
    
    // Dias da semana em que a pessoa pode voluntariar
    $dias_voluntariado = implode(", ", $dias_voluntariado);
    
    $comentario = $_POST["comentario"];

    
    // Preparar a consulta SQL para inserir os dados na tabela "voluntarios"
    $sql = "INSERT INTO voluntarios (nome, email, endereco, telefone, dias_voluntariado, comentario) 
            VALUES ('$nome_comleto', '$email', '$endereco', '$telefone', '$dias_voluntariado', '$comentario')";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location: ../volunteer.php?l=c4ca4238a0b923820dcc509a6f75849b");
        exit();
    }

  
} else {
    // O formulário não foi submetido ainda, você pode adicionar uma mensagem ou redirecionar o usuário de volta ao formulário.
    echo "Por favor, preencha o formulário e envie os dados.";
}

?>
