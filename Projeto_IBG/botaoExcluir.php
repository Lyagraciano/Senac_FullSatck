<?php

include_once("conexao.php");

$idpedido = $_POST['idpedido'];


$sql = "DELETE FROM pedidooracao WHERE idpedido = '$idpedido'";


mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    echo "Produto deletado com sucesso";
}else{
    echo"Nenhum produto foi deletado";
}


if(mysqli_affected_rows($conn)){
    header('Location:./gerenciarPedidos.php');
}else{
    header('Location:./gerenciarPedidos.php');
}
?>