<?php
include_once("head.php");
include_once("conexao.php");

function gerarTabelaHTML($conn, $result)
{
    echo "<div class='container card mt-2'>
        <h1 class='mt-3' style='text-align: center;'>Lista de Produtos</h1>
        <a href='atividade_Formulario.html' class='btn btn-primary mb-2'>Cadastrar</a>
        <table class='table table-striped table-sm' id='tabelaPrincipal'>
            <tr>
                <th>ID</th>
                <th>Produtos</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Validade</th>
                <th>Editar</th>
                <th>Deletar</th>
                <th>Vendas</th>
            </tr>";

    while ($linha = mysqli_fetch_array($result)) {
        echo "<tr id='trCadastro'>
            <td data-label='ID'> $linha[ID]</td>
            <td data-label='Produtos'> $linha[Produto]</td>
            <td data-label='Valor'> $linha[Valor]</td>
            <td data-label='Quantidade'> $linha[Quantidade]</td>
            <td data-label='Validade'> $linha[Validade]</td>
            <input type='hidden' id='produto$linha[ID]' value='$linha[Produto]'>
            <input type='hidden' id='valor$linha[ID]' value='$linha[Valor]'>
            <input type='hidden' id='quantidade$linha[ID]' value='$linha[Quantidade]'>
            <input type='hidden' id='validade$linha[ID]' value='$linha[Validade]'>
            <td><button class='btn btn-warning' onclick='abrirModalEditar($linha[ID])'>Editar</button></td>
            <form action='remover.php' method='POST'>
                <td><input class='btn btn-danger' type='submit' name='comando' value='Deletar' onclick=\"return confirm('Deseja deletar esse registro?')\"></td>
                <input type='hidden' name='id' value='$linha[ID]'>
            </form>
            <td><button class='btn btn-success' onclick='abrirModalVendas($linha[ID])'>Vendas</button></td>
        </tr>";
    }
    echo "</table></div>";
}
/*
function retornarTabelaComFiltro($conn, $filtro)
{
    $filtro = json_decode($filtro, true);
    $sql = "SELECT * FROM produtos WHERE ";
    
    if (isset($filtro["idProduto"])) {
        $id_pro = $filtro["idProduto"];
        $sql .= " id = $id_pro AND ";
    }
    if (isset($filtro["produto"])) {
        $prod = $filtro["produto"];
        $sql .= " produto LIKE '%$prod%' AND ";
    }

    $final = trim(substr($sql, strlen($sql) - 5, strlen($sql)));
    if ($final == "AND ") {
        $sql = trim(substr($sql, 0, strlen($sql) - 5));
    }

    $sql .= " LIMIT 0, 10";
    $result = mysqli_query($conn, $sql);
    gerarTabelaHTML($conn, $result);

    $_SESSION["filtro"] = $sql;
}
*/function retornarTabelaComFiltro($conexao, $tabela, $filtro)
{
    $filtro = json_decode($filtro, true);
    $sql = "SELECT * FROM $tabela WHERE ";

    if (isset($filtro["idProduto"])) {
        $id_pro = $filtro["idProduto"];
        $sql .= " id = $id_pro AND ";
    }

    if (isset($filtro["produto"])) {
        $prod = $filtro["produto"];
        $sql .= " produto LIKE '%$prod%' AND ";
    }

    // Remover a última palavra AND, se presente
    $sql = rtrim($sql, " AND ");

    // Adicionar LIMIT ao final da consulta
    $sql .= " LIMIT 0, 10";

    // Obter o resultado da consulta
    $result = mysqli_query($conexao, $sql);

    // Verificar se a consulta foi bem-sucedida
    if ($result) {
        // Gerar tabela HTML com os resultados
        gerarTabelaHTML($conexao, $result);
        $_SESSION["filtro"] = $sql;
    } else {
        // Lidar com o erro (exibir mensagem de erro ou outro tratamento)
        echo "Erro na consulta SQL: " . mysqli_error($conexao);
    }
}


if (isset($_POST['filtroTabela']) && isset($_POST['tabela']) && isset($_POST['filtroData'])) {
    retornarTabelaComFiltro($conn, $_POST['filtroData']);
}

if (isset($_POST["tabelaNormal"]) && isset($_POST["tabela"])) {
    $tabela = $_POST["tabela"];
    $sql = "SELECT * FROM produtos LIMIT 0, 10";
    $result = mysqli_query($conn, $sql);
    gerarTabelaHTML($conn, $result);
}

if (isset($_POST["removerFiltro"])) {
    unset($_SESSION["filtro"]);
}
?>