<?php
$id = $_POST ["id"];

include_once("head.php");
include_once("conexao.php");

$sql = "SELECT * FROM produtos where id = $id";
$resultado = mysqli_query ($conn, $sql);
$linha = mysqli_fetch_array ($resultado);

if ($linha) {
    echo  "<body>
    <div class='card container mt-3'>
        <form action='' method='POST'>
            <div class='mb-3'>
                <h1 class='mt-3'>Pesquisa de Produtos</h1>
                <label class='form-label'>Produto*</label>
                <input type='text' class='form-control' id='produto' name='produto' value ='$linha[Produto]' onblur= 'V_produto(this)' required>
                <div id='alertaProduto' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'> Valor*</label>
                <input type='text' class='form-control' id='valor' name='valor' value ='$linha[Produto]' onblur= 'V_valor(this)' required>
                <div id='alertaValor' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'> Quantidade*</label>
                <input type='text' class='form-control' id='quantidade' name='quantidade' value ='$linha[Produto]' onblur= 'V_quantidade(this)' required>
                <div id='alertaQuantidade' class='form-text'></div>
            </div>
            <div class='mb-3'>
               <label class='form-label'>Validade*</label>
                <input type='date' class='form-control' id='validade' name='validade'  value ='$linha[Produto]' onblur= 'V_validade(this)' required>
                <div id='alertaValidade' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <input type='submit' value='Cadastrar' class='btn btn-primary' onclick='V_cadastrar(this)'>
            </div>
    </div>
    </form>
    </body>";
}
else {
    echo "Id não encontrado";
}
?>