<?php
// conexão com o banco de dados:
// $conn = new MySQli("localhost", "root(usuário raiz)", "password(senha)", "teste");
//Cadastro.

$produto = $_POST["produto"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$validade = $_POST["validade"];

     $conn = new MySQli('localhost', 'id21692090_empresa', 'Empresa@123', 'id21692090_bd_empresa'); //não é o nome da tabela, sim o do banco de dados.

if ($conn->connect_error) {
     die("Connection failed:" . $conn->connect_error);
} else {
     $sql = "INSERT INTO produtos (Produto, Valor, Quantidade, Validade) 
     VALUE ('$produto', '$valor', '$quantidade', '$validade')
     ";
    
   //if(mysqli_query($sql, $conn)) {
        session_start(); // inicia a sessão.

if (mysqli_affected_rows($conn)) {
    $_SESSION ["cadastrar"] = "1";
    header ('Location:./index.php');
} else {
    $_SESSION["cadastrar"] = "2";
    header ('Location:./index.php');
}
     }
    // }
     
echo "Produto: $produto <br>
     Valor: $valor <br>
     Quantidade: $quantidade <br>
     Validade: $validade <br>";
?>