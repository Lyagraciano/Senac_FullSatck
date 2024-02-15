<?php
include ("head.php");
include("conta.php");
include("conexao.php"); //arquivo com a classe conexao

$c = new Conta($_POST["agencia"], $_POST["conta"], 0, $_POST["senha"]);
//conexao
$conn = new Conexao(); //criar objeto da classe conexao
$conexao = $conn->criarConexao(); //chamar metodo da classe conexao

/*$conn = new MySQli('localhost', 'id21692090_empresa', 'Thaly@_97', ' id21692090_empresa
'); //não é o nome da tabela e sim o do banco de dados.
//servidor local, usuário, senha e banco de dados.
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}*/

$conn->inserir($c,$conexao);
?>