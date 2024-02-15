<?php

include_once("conexao.php");
include_once("head.php");

$conn = new MySQli('localhost','root', '', 'projeto_ibg');



    $ibg = "SELECT * FROM pedidooracao";
    $result = mysqli_query($conn, $ibg);

if ($result) {

    echo " <div class='container card mt-2'>
    <h2 class='text-center'>Lista Pedido de Oração</h2>

    <a href='' class='btn btn-primary'></a>

    <a href='index.html' class='btn btn-success mt-2 mb-2'>Sair</a>

    <table class='table table-striped table-sm' id= 'tabelaPrincipal'>
    <tr>
    <th class='text-center'>ID</th>
    <th class='text-center'>Nome</th>
    <th class='text-center'>Contato</th>
    <th class='text-center'>Data do Culto</th>
    <th class='text-center'>Motivo da Oração</th>
    <th class='text-center'>Editar</th>
    <th class='text-center'>Deletar</th>
    </tr>";

    while ($linha = mysqli_fetch_array($result)) {
        echo"<tr id='trCadastro' class='text-center'>
           
                <td data-label='idpedido'> $linha[idpedido]</td>
                <td data-label='nome'> $linha[nome]</td>
                <td data-label='contato'> $linha[contato]</td>
                <td data-label='dataCulto'> $linha[dataculto]</td>
                <td data-label='motivooração'> $linha[motivooracao]</td>

                <input type='hidden' id='nome$linha[idpedido]' value='$linha[nome]'>
                <input type='hidden' id='contato$linha[idpedido]' value='$linha[contato]'>
                <input type='hidden' id='dataculto$linha[idpedido]' value='$linha[dataculto]'>
                <input type='hidden' id='motivooracao$linha[idpedido]' value='$linha[motivooracao]'>

                <td><button class='btn btn-warning' onclick='abrirModalEditar($linha[idpedido])'>Editar</button></td>

        <form action = 'botaoExcluir.php' method='POST'>
            <td class='text-center'><input class='btn btn-danger' type='submit' name='comando' value='Deletar' onclick=\"return confirm('Deseja deletar o produto?')\"></td>
            <input type='hidden' name='idpedido' value='$linha[idpedido]'>
        
        </form>
        </tr>";
    }
echo "</table> ";
  }else {
    echo "0 resultado";
}

?>

<!--modal Editar-->

<div class='modal fade' id='modalEditar' tabindex="-1" role="dialog" aria-labelledby="exampleodalCenterTitle"
    aria-hidden="true">
    <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class="modal-content">
            <form action="atualizar.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pedidos de Oração</h5>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" id="editarId" name="idpedido" class="form-control">
                        <label>ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="editarNome" name="nome" class="form-control">
                        <label>Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="editarContato" name="contato" class="form-control">
                        <label>Contato</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" id="editarDataCulto" name="dataculto" class="form-control">
                        <label>Data Culto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="editarMotivoOracao" name="motivooracao" class="form-control">
                        <label>Motivo Oração</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="fecharModalEditar()">Fechar</button>
                    <input type="submit" class="btn btn-primary" value="Editar">
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    function abrirModalEditar(idpedido) {
        //limparCamposEditar();
        $("#modalEditar").modal("show");

        nome = document.getElementById("nome" + idpedido);
        editarId = document.getElementById("editarId");
        editarNome = document.getElementById("editarNome");

        contato = document.getElementById("contato" + idpedido);
        editarId = document.getElementById("editarId");
        editarContato = document.getElementById("editarContato");


        dataculto = document.getElementById("dataculto" + idpedido);
        editarId = document.getElementById("editarId");
        editarDataCulto = document.getElementById("editarDataCulto");

        motivooracao = document.getElementById("motivooracao" + idpedido);
        editarId = document.getElementById("editarId");
        editarMotivoOracao = document.getElementById("editarMotivoOracao");

        editarId.value = idpedido;
        editarNome.value = nome.value;

        editarId.value = idpedido;
        editarContato.value = contato.value;

        editarId.value = idpedido;
        editarDataCulto.value = dataculto.value;

        editarId.value = idpedido;
        editarMotivoOracao.value = motivooracao.value;
    }


    function fecharModalEditar() {
        $("#modalEditar").modal("hide");
    }
</script>





