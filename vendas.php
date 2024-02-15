<?php

include_once("conexao.php");
include_once("head.php");

$id = $_POST['vendas_Id'];
$produto = $_POST['vendas_Produto'];
$quantidade = $_POST['vendas_Quantidade'];


$sql = "SELECT quantidade FROM produtos WHERE ID ='$id'";

$result = mysqli_query ($conn, $sql);
$linha = mysqli_fetch_array($result);
echo "<br> $linha[quantidade]";
$quantidadeAtualizada = $linha['quantidade'] - $quantidade;

$sql = "UPDATE produtos SET quantidade = '$quantidadeAtualizada' WHERE ID = $id";

mysqli_query($conn, $sql);
session_start();
if (mysqli_affected_rows($conn)) {
    $_SESSION ["atualizar"] = "1";
    header ('Location:gerenciar_produtos.php');
    
} else {
    $_SESSION["atualizar"] = "2";
    header ('Location:gerenciar_produtos.php');
}

?>