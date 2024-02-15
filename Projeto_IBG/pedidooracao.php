<?php

/*session_start();
if (isset($_SESSION["cadastrar"])){
    if ($_SESSION["cadastrar"] == "1"){
        unset($_SESSION["cadastrar"]);
        echo"<script>alert('Pedido de oração registrado com sucesso')</script>";
}else if($_SESSION["cadastrar"] == "2"){
    unset($_SESSION["cadastrar"]);
    echo"<script>alert('Nenhum pedido de oração foi registrado')</script>";

}
}*/

$ibg = new MySQli('localhost','root','','projeto_ibg');

$nome = $_POST['nome'];
$contato = $_POST['contato'];
$dataCulto = $_POST['dataculto'];
$motivooracao = $_POST['motivooracao'];

    

    if($ibg->connect_error){
        die("Connection failed:" .$ibg->connect_error);
    }else{
        $sql = "INSERT INTO pedidooracao (nome, contato, dataculto, motivooracao)
            VALUE ('$nome', '$contato', '$dataCulto', '$motivooracao')";
            

    if(mysqli_query($ibg, $sql)){
      session_start();
        if(mysqli_affected_rows($ibg)){
          $_SESSION["cadastrar"] = "1";
          echo"<script>alert('Pedido de oração registrado com sucesso')</script>";
          header('Location:index.html');
        }
    }else{
      $_SESSION["cadastrar"] = "2";
        echo"Falha no comando SQL";
    }
    }
?>