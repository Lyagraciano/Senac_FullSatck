<?php
// conexão com o banco de dados:
// $conn = new MySQli("localhost", "root(usuário raiz)", "password(senha)", "teste");


$produto = $_POST["produto"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$validade = $_POST["validade"];

echo "Produto: $produto <br>
     Valor: $valor <br>
     Quantidade: $quantidade <br>
     Validade: $validade <br>";
     $conn = new MySQli('localhost', 'root', '', 'bd_empresa'); //não é o nome da tabela e sim o do banco de dados.
if ($conn->connect_error) {
     die("Connection failed:" . $conn->connect_error);
} else {
     $sql = "INSERT INTO produtos (Produto, Valor, Quantidade, Validade) -- nome da tabela-->
     VALUE ('$produto', '$valor', '$quantidade', '$validade')
     ";
     mysqli_query($conn,$sql);
}
/* SELECT * FROM 'nome da tabela'  (para pesquisar algo na tabela) ( o * significa todas as colunas)
SELECT * FROM produto WHERE id = 1 (WHERE = nome da coluna; valor procurado and nome da coluna) ex: SELECT *  produto  nome FROM produto WHERE valor >3 and valor <10
*/
?>