<?php
$id = $_POST["id"];

include_once("head_sc.php");

$sql = "SELECT * FROM st_pacientes where ID_paciente = $id";
$resultado = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($resultado);

if ($linha) {
    echo "      
    <div class='card container mt-5 pb-5' style='border: none;'>
        <h1 style='text-align: center;' class='mt-0'>Cadastro de Paciente</h1>
          <form class='shadow p-3' action='cadastrar_paciente.php' method='POST'>
                <div class='mb-3 mt-4'>
                    <label class='form-label'>Nome*</label>
                    <input type='text' class='form-control' id='nome' name='nome' value= '$linha[Nome]' onblur='V_nome(this)' required>
                    <div id='alertaNome' class='form-text'></div>
                </div>
                  <div class='mb-3'>
                    <label class='form-label'>Sexo*</label>
                    
                    <select class='form-select' name='sexo' value= '$linha[Sexo]' id='sexo'>
                    <option value='M' selected> Masculino</option>
                    <option value='F'> Feminino</option>
                    <option value='O'> Outros</option>
                    </select>
                  </div>
                    <div class='mb-3'>
                        <label class='form-label'>CPF*</label>
                        <input type='text' class='form-control' id='cpf' name='cpf'  value= '$linha[CPF]' onblur='V_cpf(this)' required>
                        <div id='alertaCPF' class='form-text'></div>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Data de Nascimento*</label>
                            <input type='date' class='form-control' id='dataNascimento' value= '$linha[dataNascimento]' name='dataNascimento' onblur='V_dataNascimento(this)' required>
                            <div id='alertaDataNascimento' class='form-text'></div>
                          </div>
                          
                          <div class='mb-3'>
                            <input type='submit' class='btn btn-primary' value='Cadastrar' onclick='V_cadastrar()'>
                          </div>
                    </div>
                </div>
    </form>
    </body>";
} else {
    echo "Id não encontrado";
}
?>