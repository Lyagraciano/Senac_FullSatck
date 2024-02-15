<?php

include_once("conexao.php");

$idpedido = $_POST['idpedido'];
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$dataCulto = $_POST['dataculto'];
$motivooracao = $_POST['motivooracao'];

$sql = "UPDATE pedidooracao SET nome = '$nome', contato = '$contato', dataculto = '$dataCulto', motivooracao = '$motivooracao'
WHERE idpedido = '$idpedido'";

mysqli_query($conn, $sql);

/*if(mysqli_affected_rows($conn)){
      echo "Dados Atualizados";
}else{
      echo"Nenhum Alteração foi realizada";
}*/


/*if(mysqli_affected_rows($conn)){            <-----  // codigo comentando para testar com o euclides outro dia //
      $_SESSION["result"] ="1";
      header('Location:./A42_produtos_21.11.html');
}else{
      $_SESSION["result"] ="2";
      header('Location:./A42_produtos_21.11.html');
}*/

// AULA 49 30.11 --- PRECISEI COMENTAR O CODIGO ACIMA PARA PODER REALIZAR O PROCEDIMENTO DA AULA 49 COM O CODIGO ABAIXO //

session_start();  //   <-- inicia a sessão   (codigo acresscido na aula 51 dia 04.12.23)
if(mysqli_affected_rows($conn)){
      $_SESSION["atualizar"] = "1"; //  <-- atribui
      header('Location:./gerenciarPedidos.php');
}else{
      $_SESSION["atualizar"] = "2";
      header('Location:./gerenciarPedidos.php');
}