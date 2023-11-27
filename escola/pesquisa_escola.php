<?php
$pesquisa= $_POST["pesquisa"];

include_once("head_escola.php");
include_once("conexao_escola.php");

$sql = "SELECT * FROM matriculas where ID = $pesquisa";
$matricula = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($matricula);

if ($linha){
    echo "<body>
    <div class='container mt-3' style=' background-color: #b6bbd5'>
        <form action='atividade_escola.php' method='POST'>
            <div class='mb-3'>
                <h2 style='font-family: 'Times New Roman', Times, serif;' class='text-center mb-4' >Cadastro - Escola
                    Etoiles</h2>
                <label class='form-label'>Nome:</label>
                <input type='text' class='form-control' name='nome' id='nome' onblur='V_nome(this)' value ='$linha[Nome]' required>
                <div id='alertaNome' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Idade:</label>
                <input type='text' class='form-control' name='idade' id='idade' onblur='V_idade(this)' value ='$linha[Idade]' required>
                <div id='alertaIdade' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Curso:</label>
                <input type='text' class='form-control' name='curso' id='curso' onblur='V_curso(this)' value ='$linha[Curso]'required>
                <div id='alertaCurso' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Gênero:</label>
                <input type='text' class='form-control' name='genero' id='genero' onblur='V_genero(this)' value ='$linha[Genero]' required>
                <div id='alertaGenero' class='form-text'></div>
            </div>
            <input type='submit' class='btn btn-primary mb-3' value='Matrícula' onclick='V_matricula(this)'>
            </div>
        </form>
        </body>";
}
else {
    echo "Id não encontrado";
}
?>