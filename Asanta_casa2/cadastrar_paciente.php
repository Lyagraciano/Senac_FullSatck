<?php
$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$cpf = $_POST["cpf"];
$dataNascimento = $_POST["dataNascimento"];

echo "Nome: $nome <br>
     Sexo: $sexo <br>
     CPf: $cpf <br>
     Data de Nascimento: $dataNascimento <br>";
     $conn = new MySQli('localhost', 'id21692090_syog', 'Thaly@_97', 'id21692090_st_casa'); //não é o nome da tabela e sim o do banco de dados.

if ($conn->connect_error) {
     die("Connection failed:" . $conn->connect_error);
} else {
     $sql = "INSERT INTO st_pacientes (Nome, Sexo, CPf, Data_Nascimento) -- nome da tabela-->
     VALUE ('$nome', '$sexo', '$cpf', '$dataNascimento')
     ";
    
     if (mysqli_query($conn, $sql));
     }
?>