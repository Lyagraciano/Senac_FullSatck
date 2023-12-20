<?php
$conn = new MySQli('localhost', 'id21692090_syog', '', 'id21692090_st_casa
'); //não é o nome da tabela e sim o do banco de dados.
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
/*isso é para fazer a conexão do html com o php e banco de dados(não é necessário fazer em um arquivo separado).*/
?>