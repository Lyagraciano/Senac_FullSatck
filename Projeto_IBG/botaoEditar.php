<?php

include_once("conexao.php");
include_once("head.php");

$idpedido = $_POST['idpedido'];

$nome = $_POST['nome'];
$contato = $_POST['contato'];
$dataCulto = $_POST['dataculto'];
$motivooracao = $_POST['motivooracao'];

$sql = "UPDATE pedidooracao SET nome = '$nome', contato = '$contato', dataculto = '$dataCulto', motivooracao ='$motivooracao' WHERE  id = '$idpedido'";

mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){
    header('Location:./atualizar.php');
}else{
    header('Location:./atualizar.php');
}
?>