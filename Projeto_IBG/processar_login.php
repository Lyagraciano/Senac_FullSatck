<?php

/*$login = $_POST["username"];
$senha = $_POST["password"];

//echo"$login, $senha";

//if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){//
  if($login == 'admLogin' && $senha == '153'){
    header('Location:./gerenciarPedidos.php');
}
else{
    header('Location:./loginAdm.html');
}
*/

$username = $_POST["username"];
$password = $_POST["password"];

//echo"$login, $senha";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica se o usuário e a senha são válidos (exemplo simples)
    $usuario_valido = "usuario"; // Substitua pelo seu usuário válido
    $senha_valida = "senha123"; // Substitua pela sua senha válida

    if ($username == $usuario_valido && $password == $senha_valida) {
        // Autenticação bem-sucedida
        //echo "Login bem-sucedido!";
        header('Location:./gerenciarPedidos.php');
    } else {
        // Autenticação falhou
        //echo "Usuário ou senha inválidos.";
        header('Location:./loginAdm.html');
    }
}

?>