<?php

//AULA 57 ( 1° PASSO DE UM CADASTRO --> FAZER ESSE ARQUIVO PARA A CONSTRUÇÃO DO PRÓXIMO )

if (isset($_SESSION["cadastroPaciente"])) {
    if ($_SESSION["cadastroPaciente"] == "1") {
        unset($_SESSION["cadastroPaciente"]);
        echo "<script>alert('Paciente cadastrado com sucesso!')</script>";
    } else if ($_SESSION["cadastroPaciente"] == "2") {
        unset($_SESSION["cadastroPaciente"]);
        echo "<script>alert('Erro ao cadastrar paciente')</script>";
    }
}

include_once("A57_headPaciente2_13.12.php");

echo "<body>
<br><br>

<hr>

<div class='card container mt-5 pb-5' style='border: none;'>
  <h1 style='text-align: center;' class='mt-0'>CADASTRO DE PACIENTE</h1>
    <form class='shadow p-3' action='A57_cadastrar_paciente3_13.12.php' method='POST'>
          <div class='mb-3 mt-4'>
              <label class='form-label'>Nome*</label>
              <input type='text' class='form-control' id='nome' name='nome' onblur='V_nome(this)' required>
              <div id='alertaNome' class='form-text'></div>
          </div>
            <div class='mb-3'>
              <label class='form-label'>Sexo*</label>
              
              <select class='form-select' name='sexo'> id='sexo'>
              <option value='M' selected> Masculino</option>
              <option value='F'> Feminino</option>
              <option value='O'> Outros</option>
              </select>
            </div>
              <div class='mb-3'>
                  <label class='form-label'>CPF*</label>
                  <input type='text' class='form-control' id='cpf' name='cpf' onblur='V_cpf(this)' required>
                  <div id='alertaCPF' class='form-text'></div>
                  </div>
                  <div class='mb-3'>
                      <label class='form-label'>Data de Nascimento*</label>
                      <input type='date' class='form-control' id='dataNascimento' name='dataNascimento' onblur='V_dataNascimento(this)' required>
                      <div id='alertaDataNascimento' class='form-text'></div>
                    </div>
                    
                    <div class='mb-3'>
                      <input type='submit' class='btn btn-primary' value='Cadastrar' onclick='V_cadastrar()'>
                    </div>
              </div>
          </div>
    </form>
</div>
</body>";
?>