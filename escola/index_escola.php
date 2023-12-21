<?php
include_once("head_escola.php");
include_once("conexao_escola.php");


$sql = "SELECT * FROM matriculas";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<div class= 'container card mt-2'>
    <h1 class = 'mt-3' style= 'text-align: center;'>Lista de Alunos</h1>
    <a href = 'atividade_escola.html' class ='btn btn-primary mb-2'>Cadastrar</a>
    <table class = 'table table-striped table-sm'
    id = 'tabelaPrincipal'>
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Curso</th>
    <th>Idade</th>
    <th>Gênero</th>
    <th>Editar</th>
    <th>Deletar</th>
    </tr>";

    while($linha = mysqli_fetch_array($result)){
        echo "<tr id = 'trCadastro'>
        <form action = 'pesquisa_escola.php' method = 'POST'>
        <td data-label = 'ID'> $linha[ID]</td>
        <td data-label = 'Nome'> $linha[Nome]</td>
        <td data-label = 'Curso'> $linha[Curso]</td>
        <td data-label = 'Idade'> $linha[Idade]</td>
        <td data-label = 'Genero'> $linha[Genero]</td>
        <td> <input class = 'btn btn-primary' type = 'submit' name = 'comando' value = 'Editar' onclick = \"return confirm ('Atenção, você está editando esse registro')\"></td>
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