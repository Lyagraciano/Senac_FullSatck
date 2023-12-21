<?php
// remover dados.

include_once("conexao_escola.php");
include_once("head_escola.php");

$id = $_POST['remover'];

$sql = "DELETE FROM matriculas WHERE ID = '$id'";

mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn)) {
    header ('Location:./index_escola.php');
    
} else {
    header ('Location:./index_escola.php');
}
?>