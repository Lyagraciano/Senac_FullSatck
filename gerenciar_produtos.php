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

$sql = "SELECT * FROM produtos ORDER BY Produto";

$result = mysqli_query($conn, $sql);
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
    <th>Vendas</th>
    </tr>";

    while($linha = mysqli_fetch_array($result)){
        echo "<tr id = 'trCadastro'>
      
      
        <td data-label = 'ID'> $linha[ID]</td>
        <td data-label = 'Produtos'> $linha[Produto]</td>
        <td data-label = 'Valor'> $linha[Valor]</td>
        <td data-label = 'Quantidade'> $linha[Quantidade]</td>
        <td data-label = 'Validade'> $linha[Validade]</td>
       
        <input type = 'hidden' id='produto$linha[ID]' value = '$linha[Produto]'>
        <input type = 'hidden' id='valor$linha[ID]' value = '$linha[Valor]'>
         <input type = 'hidden' id='quantidade$linha[ID]' value = '$linha[Quantidade]'>
          <input type = 'hidden' id='validade$linha[ID]' value = '$linha[Validade]'>
        
        <td><button class='btn btn-warning' onclick='abrirModalEditar($linha[ID])'>Editar</button></td>
        
        <form action = 'remover.php' method = 'POST'>
        <td> <input class = 'btn btn-danger' type = 'submit' name = 'comando' value = 'Deletar' onclick = \"return confirm ('Deseja deletar esse registro?')\"></td>
        <input type = 'hidden' name = 'id' value = '$linha[ID]'>

        </form>
        <td> <button class='btn btn-success' onclick='abrirModalVendas($linha[ID])'>Vendas</button></td>
        
        </tr>";
    }
    echo "</table>";

}
else {
    echo "Sem resultados";
}

?>
<section class= "page-section" id = "contact">
    <div class = "row mb-5 text-center d-nome d-lg-block">
        <div class = "col-lg-12 col-sm-12">
            <div class = "m-2">
                <button class= 'btn btn-warning' onclick = "abrirModalFiltro()"> Filtrar Produtos</button>
</div>
<button class = 'btn btn-warning d-none' id='btnRemoverFiltro' onclick='removerFiltro(this)'>Remover Filtro</button>
        </div>
    </div>
</section>

<!--Modal Editar-->
<section class= "page-section" id = "contact">
<div class = 'modal fade' id = 'modalEditar' tabindex="-1" role = 'dialog' aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class = 'modal-dialog modal-dialog-centered' role= 'document'>
        <div class = 'modal-content'>
            <form action = "atualizar.php" method = "POST">
                <div class = 'modal-header'>
                    <h5 class = 'modal-title' id = 'examplemodalLongTitle'> Editar Produtos </h5>
</div>
<div class= 'modal-body'>
    <div class= 'form-floating mb-3'>
        <input type = 'text' id = 'editarId' name = 'id' class = 'form-control'>
        <label> ID </label>
</div>
<div class= 'form-floating mb-3'>
        <input type = 'text' id ='editarProduto' name = 'produto' class = 'form-control'>
        <label> Produto </label>
</div>
<div class= 'form-floating mb-3'>
        <input type = 'text' id ='editarValor' name = 'valor' class = 'form-control'>
        <label>Valor</label>
</div>
<div class= 'form-floating mb-3'>
        <input type = 'text' id ='editarQuantidade' name = 'quantidade' class = 'form-control'>
        <label>Quantidade</label>
</div>
<div class= 'form-floating mb-3'>
        <input type = 'text' id ='editarValidade' name = 'validade' class = 'form-control'>
        <label>Validade</label>
</div>

<div class = 'modal-footer'>
    <button type = 'button' class = 'btn btn-secondary' onclick='fecharModalEditar()'>Fechar</button>
    <input type = 'submit' class = 'btn btn-primary' value= "Editar">
</div>
            </form>
        </div>
    </div>
</div>
</section>
<!--Modal Vendas-->
<section class= "page-section" id = "contact">
<div class = 'modal fade' id = 'modalVendas' tabindex="-1" role = 'dialog' aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class = 'modal-dialog modal-dialog-centered' role= 'document'>
        <div class = 'modal-content'>
            <form action = "vendas.php" method = "POST">
                <div class = 'modal-header'>
                    <h5 class = 'modal-title' id = 'examplemodalLongTitle'> Vendas de Produtos </h5>
</div>
<div class= 'modal-body'>
    <div class= 'form-floating mb-3'>
        <input type = 'text' id = 'vendasId' name = 'id_vendas' class = 'form-control'>
        <label> ID </label>
</div>
<div class= 'form-floating mb-3'>
        <input type = 'text' id = 'vendasProduto' name = 'vendas_produto' class = 'form-control'>
        <label> Produto </label>
</div>
<div class= 'form-floating mb-3'>
        <input type = 'text' id = 'vendasQuantidade' name = 'vendas_quantidade' class = 'form-control'>
        <label> Quantidade Vendida </label>
</div>

<div class = 'modal-footer'>
    <button type = 'button' class = 'btn btn-secondary' onclick='fecharModalVendas()'>Fechar</button>
    <input type = 'submit' class = 'btn btn-primary' value= "Vender">
</div>
            </div>
</div>
</div>
</div>
            </form>
</section>
<!--Modal Filtros-->
<section class= "page-section" id = "contact">
<div class = 'modal fade' id = 'modalFiltro' tabindex="-1" role = 'dialog' aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class = 'modal-dialog modal-dialog-centered' role= 'document'>
        <div class = 'modal-content'>
                <div class = 'modal-header'>
                    <h5 class = 'modal-title' id = 'examplemodalLongTitle'> Filtrar Produtos </h5>
</div>
<div class= 'modal-body'>
    <h5>Filtrar por:</h5>
    <div class= 'form-floating mb-3'>
        <input type = 'text' id = 'filtroId'  class = 'form-control'>
        <label> ID </label>
</div>
<div class= 'form-floating mb-3'>
        <input type = 'text' id = 'filtroProduto'class = 'form-control'>
        <label> Produto </label>
</div>
<div class = 'modal-footer'>
    <button type = 'button' class = 'btn btn-secondary' onclick='fecharModalFiltro()'>Fechar</button>
    <button type = 'button' class = 'btn btn-primary' onclick='aplicarFiltro()'>Aplicar Filtro</button>
    </div>
</div>
</div>
</div>
</div>
</section>
<!--script-->
<script>
       function abrirModalEditar(id){
        
        $("#modalEditar").modal("show");
        produto =  document.getElementById("produto"+id);
        valor = document.getElementById("valor"+id);
       quantidade = document.getElementById("quantidade"+id);
        validade = document.getElementById("validade"+id);
        editarId = document.getElementById("editarId");
        editarProduto = document.getElementById("editarProduto");
        editarValor = document.getElementById("editarValor");
        editarQuantidade = document.getElementById("editarQuantidade");
        editarId.value = id;
        editarProduto.value = produto.value;
        editarValor.value = valor.value;
        editarQuantidade.value = quantidade.value;
        editarValidade.value = validade.value;
    }
    function fecharModalEditar(){
        $("#modalEditar").modal("hide");
    }



    function abrirModalVendas(id){
         //limpar campos editar();
        $("#modalVendas").modal("show");
       
        produto =  document.getElementById("produto"+id);
        vendasId = document.getElementById("vendasId"+id);
        vendasProduto = document.getElementById("vendasProduto"+id);
    //preenche o modal
    vendasId= id;
    vendasProduto.value = produto.value;
    }
    function fecharModalVendas(){
        $("#modalVendas").modal("hide");
    }

 </script>
 <!--script de filtros-->
 <script>
    function abrirModalFiltro(){
        limparCampos();
        $("#modalFiltro").modal("show");
    }
    function fecharModalFiltro(){
        $("#modalFiltro").modal("hide");
    }
    //limpa campos do modal
    function limparCampos(){
        document.getElementById("filtroId").value = "";
        document.getElementById("filtroProduto").value = "";
    }
    const btnRemoverFiltro = document.querySelectorAll
    ("#btnRemoverFiltro");
    
    //aplica os filtros.
    
    function aplicarFiltro(){
        let idProduto = document.getElementById("filtroId").value;
        let produto = document.getElementById("filtroProduto").value;
        //tabela gerada pelo PHP
        let tabela = document.getElementById("tabelaPrincipal");
        let json = {};
        if (idProduto != ""){json.idProduto = idProduto;}
        if (idProduto != ""){json.produto = produto;}
        
        if (idProduto != "" || produto !="")
        {
            $.ajax({
                url:"querys.php",
                method: "POST",
                data: {filtroTabela: "sim", tabela: "produtos",
                filtroData: JSON.stringify(json)},
                success:(data) => {
                    tabela.innerHTML = data;
                    /*for(i = 0; i <btRemoverFiltro.length; i++){*/
                        btnRemoverFiltro[0].classList.remove("d-none");
                    //}
                    $("#modalFiltro").modal("hide");
                }
            })
        }
        
    }
     function removerFiltro(){
        let tabela = document.getElementById("tabelaPrincipal");
        $.ajax ({
            url: ".querys.php",
                method: "POST",
                data: {tabelaNormal: "sim", tabela: "produtos",
                    removerFiltro: "sim"},
                    success: (data) => {
                        tabela.innerHTML = data;
                        btnRemoverFiltro [0].classList.add("d-none");
                    }
        })
    }
    </script>