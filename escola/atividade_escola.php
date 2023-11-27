<?php
$nome = $_POST["nome"];
$idade = $_POST ["idade"];
$curso = $_POST  ["curso"];
$genero = $_POST ["genero"];

echo "Nome: $nome <br>
Idade: $idade <br>
Curso: $curso <br>
Genero: $genero <br>";

$conn = new MySQli('localhost', 'root', '', 'bd_escola');
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
} else {
    $sql = "INSERT INTO matriculas (Nome, Idade, Curso, Genero)
    VALUE ('$nome', '$idade', '$curso', '$genero')";
    mysqli_query($conn, $sql);
}
?>
