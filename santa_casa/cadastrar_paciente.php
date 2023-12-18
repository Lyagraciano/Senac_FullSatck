<?php

if(isset($_SESSION["cadastroPaciente"])){
    if($_SESSION["cadastroPaciente"]=="1"){
        unset($_SESSION["cadastroPaciente"]);
        echo"<script>alert('Paciente cadastrado com sucesso!');</script>";
    } else if ($_SESSION["cadastroPaciente"] == "2"){
        unset($_SESSION["cadastroPaciente"]);
        echo"<script>alert('Erro ao cadastrar!');</script>";
    }
}
    $sql = "SELECT nome FROM pacientes";
    $resultado = mysqli_query($conn, $sql);
   

echo"echo <body>
<div class= 'card container mt-3'>
<div class = 'mt-2'>
<h2 style = 'text-algin:center'>Cadastro de Paciente</h2>
</div>
<form action = 'cadastrar_paciente.php' method = 'POST'>                                                                
<div class='mb-3'>
            <label class='form-label'>Nome*</label>
            <select class='fomr-select' id='nome' name='nome' value ='$linha[Nome]' onblur= 'V_nome(this)' required>
            <div id='alertaNome' class='form-text'></div>
        </div>
        
        <div class='mb-3'>
            <label class='form-label'>Idade*</label>
            <select class='form-select' id='idade' name='idade' value ='$linha[Idade]' onblur= 'V_idade(this)' required>
            <div id='alertaIdade' class='form-text'></div>
        </div>                   

        <div class='mb-3'>
            <label class='form-label'>Sexo*</label>
            <option value = 'Masculino'>Masculino</option>
            <option value = 'Feminino'>Feminino</option>
            <option value = 'Outro'>Outro</option>
            <select class='form-select' id='sexo' name='sexo' value ='$linha[Sexo]' onblur= 'V_sexo(this)' required>
            <div id='alertaSexo' class='form-text'></div>
        </div>
        
        <div class = 'mb-3'>
        <label class = 'form-label'>CPF*</label>
        <input type = 'text' class = 'form-control' id='cpf' name = 'cpf' value ='$linha[Cpf]' onblur='V_cpf'(this) required>
        <div id='alertaCpf' class='form-text'></div>
        </div>

        <div class = 'mb-3'>
        <label class = 'form-label'>Data do Atendimento* </label>
        <input type = 'date' class = 'form-control' id = dataAtendimento name = 'dataAtendimento' value ='$linha[DataAtendimento]' onblur = 'V_dataAtendimento(this)' required>
        <div id = 'alertaDataAtendimento' class = 'form-text'></div>
        </div>

        <div class = 'mb-3'>
        <input type = 'submit' value = 'Cadastrar' class = 'btn btn-primary' onclick = 'V_cadastrar(this)'>
        </div>

</body>"; 
?>