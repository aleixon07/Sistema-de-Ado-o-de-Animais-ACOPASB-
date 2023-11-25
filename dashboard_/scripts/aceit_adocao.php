<?php

include_once "../../scripts/connection.php";

$id = $_GET['id'];

$sql_agendamento = "DELETE FROM agendamentos WHERE idanimal = '$id'";
$result_agendamento = mysqli_query($conn,$sql_agendamento);

$sql_animal = "DELETE FROM animal WHERE idanimal = '$id'";
$result_animal = mysqli_query($conn,$sql_animal);

if($result_animal && $result_agendamento){
    header("Location: ../pedidos_adocao.php?l=c4ca4238a0b923820dcc509a6f75849b");
    exit();
}


?>