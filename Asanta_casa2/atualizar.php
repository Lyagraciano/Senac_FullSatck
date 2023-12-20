<?php

include_once("conexao.php");
include_once("head.php");

$id = $_POST['id'];
$produto = $_POST['produto'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];

$sql = "UPDATE produtos2 SET Produto = '$produto', Valor = '$valor', Quantidade = '$quantidade', Validade = '$validade'
WHERE ID = '$id'";

mysqli_query($conn, $sql);

session_start();
if (mysqli_affected_rows($conn)) {
    $_SESSION ["atualizar"] = "1";
    header ('Location:./index.php');
    
} else {
    $_SESSION["atualizar"] = "2";
    header ('Location:./index.php');
}
?>