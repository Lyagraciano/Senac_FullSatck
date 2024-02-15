<?php

session_start();
if (mysqli_affected_rows($conn)) {
    $_SESSION ["atualizar"] = "1";
    header ('Location:./index.php');
    
} else {
    $_SESSION["atualizar"] = "2";
    header ('Location:./index.php');
}
include_once("conexao.php");
include_once("head.php");

$id = $_POST['ID'];
$produto = $_POST['Produto'];
$valor = $_POST['Valor'];
$quantidade = $_POST['Quantidade'];
$validade = $_POST['Validade'];

$sql = "UPDATE produtos SET Produto = '$produto', Valor = '$valor', Quantidade = '$quantidade', Validade = '$validade'
WHERE ID = '$id'";

mysqli_query($conn, $sql);


?>