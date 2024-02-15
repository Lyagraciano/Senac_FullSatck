<?php
// CRUD (create, read, update, delete);
//Página principal em tabela.

session_start(); // inicia a sessão.
if (isset($_SESSION["atualizar"])){ //existe uma sessão.
    if ($_SESSION["atualizar"] == "1"){ //verifica se sessão = 1.
        unset ($_SESSION["atualizar"]); //zera os valores da sessão.
        echo "<script>alert('Atualizado com sucesso')</script>";
    }
    else if ($_SESSION["atualizar"] == "2"){
        unset ($_SESSION["atualizar"]);
        echo "<script>alert('Erro ao atualizar!')</script>";
    }
} else if(isset($_SESSION["remover"])){
    if ($_SESSION["remover"] == "1"){ //verifica se sessão = 1.
        unset ($_SESSION["remover"]); //zera os valores da sessão.
        echo "<script>alert('Removido com sucesso')</script>";
    }
    else if ($_SESSION["remover"] == "2"){
        unset ($_SESSION["remover"]);
        echo "<script>alert('Erro ao remover!')</script>";
    }
} else if(isset($_SESSION["cadastrar"])){
    if ($_SESSION["cadastrar"] == "1"){ //verifica se sessão = 1.
        unset ($_SESSION["cadastrar"]); //zera os valores da sessão.
        echo "<script>alert('Cadastrado com sucesso')</script>";
    }
    else if ($_SESSION["cadastrar"] == "2"){
        unset ($_SESSION["cadastrar"]);
        echo "<script>alert('Erro ao cadastrar!')</script>";
    }
}
session_destroy();

include_once("head.php");
include_once("conexao.php");

$sql="SELECT * FROM produtos ORDER BY produto";

$result = mysqli_query($conn,$sql);
if ($result) {
    echo "<div class= 'container card mt-2'>
    <h1 class = 'mt-3' style = 'text-align: center;'>Lista de Produtos</h1>
    <a href = 'atividade_Formulario.html' class ='btn btn-primary mb-2'>Cadastrar</a>
    <table class = 'table table-striped table-sm'
    id = 'tabelaPrincipal'>
    <tr>
    <th>ID</th>
    <th>Produtos</th>
    <th>Valor</th>
    <th>Quantidade</th>
    <th>Validade</th>
    <th>Editar</th>
    <th>Deletar</th>
    </tr>";

    while($linha = mysqli_fetch_array($result)){
        echo "<tr id = 'trCadastro'>
        <form action = 'pesquisa.php' method = 'POST'>
        <td data-label = 'ID'> $linha[ID]</td>
        <td data-label = 'Produtos'> $linha[Produto]</td>
        <td data-label = 'Valor'> $linha[Valor]</td>
        <td data-label = 'Quantidade'> $linha[Quantidade]</td>
        <td data-label = 'Validade'> $linha[Validade]</td>
        <td> <input class = 'btn btn-primary' type = 'submit' name = 'comando' value = 'Editar'></td>
        <input type = 'hidden' name = 'id' value = '$linha[ID]'>
        </form>
        <form action = 'remover.php' method = 'POST'>
        <td> <input class = 'btn btn-danger' type = 'submit' name = 'comando' value = 'Deletar' onclick = \"return confirm ('Deseja deletar esse registro?')\"></td>
        <input type = 'hidden' name = 'id' value = '$linha[ID]'>
        </form>
        </tr>";
    }
    echo "</table>";

}
else {
    echo "Sem resultados";
}

?>