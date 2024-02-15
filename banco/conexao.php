<?php

class Conexao{
    public function criarConexao(){
        try{//tentará fazer os comandos dentro dessa chave
            $conn= new MySQli('localhost', 'id21692090_empresa', 'Empresa@123', 'id21692090_empresa');
            return $conn;
        }catch(Exception $e){
            die("Connection failed:".$conn->connect_error);
        }
    }
    public function inserir($c, $conexao){
        try{
            $sql = "INSERT INTO conta (agencia, conta, saldo, senha) VALUES ('".$c->getAgencia()."', '".$c->getConta()."', '".$c->getSaldo()."','".$c->getSenha()."')";
            mysqli_query($conexao, $sql);
        }catch(Exception $e){
            die ("Connection failed: ".$e->getMessage());
        
    }finally{
        mysqli_close($conexao);
    }

}
}
?>