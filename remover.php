<?php

include_once("conexao.php");
include_once("head.php");

$id = $_POST['ID'];


$sql = "DELETE FROM produtos WHERE ID = '$id'";

mysqli_query($conn, $sql);

session_start(); // inicia a sessão.

if (mysqli_affected_rows($conn)) {
    $_SESSION ["remover"] = "1";
    header ('Location: index.php');
} else {
    $_SESSION["remover"] = "2";
    header ('Location: index.php');
}
?> 