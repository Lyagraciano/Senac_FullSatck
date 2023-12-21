<?php
//atualizar dados.
include_once("conexao_escola.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];
$genero = $_POST['genero'];

$sql = "UPDATE matriculas SET Nome = '$nome', Idade = '$idade', Curso = '$curso', Genero = '$genero'
WHERE ID = '$id'";

mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn)) {
    header ('Location:./index_escola.php');
    
} else {
    header ('Location:./index_escola.php');
}
?>