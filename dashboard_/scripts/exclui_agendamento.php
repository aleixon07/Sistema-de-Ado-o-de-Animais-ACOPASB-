<?php

include_once "../../scripts/connection.php";

$id = $_GET['id'];

$sql_agendamento = "DELETE FROM agendamentos WHERE idagendamentos = '$id'";
$result_agendamento = mysqli_query($conn,$sql_agendamento);


if($result_agendamento){
    header("Location: ../pedidos_adocao.php?l=c81e728d9d4c2f636f067f89cc14862c");
    exit();
}


?>