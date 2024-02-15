<?php
class Conta{
    private $agencia = "";
    private $conta = "";
    private $saldo = 0;
    private $senha = "";

public function __construct($a, $c, $s, $se){
$this->agencia = $a;
$this->conta = $c;
$this->saldo = $s;
$this->senha = $se;
}
function setAgencia($a)
{
    $this->agencia = $a;
}
function getAgencia()
{
    return $this->agencia;
}

function setConta($c)
{
    $this->conta = $c;
}
function getConta()
{
    return $this->conta;
}
function setSaldo($s)
{
    $this->saldo = $s;
}
function getSaldo()
{
    return $this->saldo;
}
function setSenha($se)
{
    $this->senha = $se;
}
function getSenha()
{
    return $this->senha;
}
}
?>
