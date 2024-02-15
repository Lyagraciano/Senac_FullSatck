<?php
include ("head.php");


echo "<body>
<div class='card container mt-3'>
    <form action ='criarConta.php' method='POST'>
        <div class='mb-3'>
            <h1 class='mt-3'>Criar Conta Bancária</h1>
            <label class='form-label'>Agência*</label>
            <input type='text' class='form-control' id='agencia' name='agencia'  onblur= 'V_agencia(this)' required>
            <div id='alertaAgencia' class='form-text'></div>
        </div>
        <div class='mb-3'>
            <label class='form-label'>Conta*</label>
            <input type='text' class='form-control' id='conta' name='conta'  onblur= 'V_conta(this)' required>
            <div id='alertaConta' class='form-text'></div>
        </div>
        <div class='mb-3'>
            <label class='form-label'>Senha*</label>
            <input type='password' class='form-control' id='senha' name='senha'  onblur= 'V_senha(this)' required>
            <div id='alertaSenha' class='form-text'></div>
        </div>

        <div class='mb-3'>
            <input type='submit' value='Criar Conta' class='btn btn-primary' onclick='V_cadastrar(this)'>
        </div>
</div>
</form>
</body>";

?>