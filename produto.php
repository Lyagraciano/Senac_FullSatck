<?php
/*class Produto/*é comum começar as classe com letra maiúscula e variáveis com letra minúscula{
    public $nome = "";
    public $quantidade = 0;
    public $preco = 0;
    //Construtor
    public function __construct($n, $q, $p){
        $this->nome = $n;
        $this->quantidade = $q;
        $this->preco = $p;
    }
    //Método (é mais tuilizado em)
    public function faturamentoMax(){
        $faturamentoMax = $this ->quantidade * $this-> preco;
        return $faturamentoMax;
    }
} */

class Produto /*é comum começar as classe com letra maiúscula e variáveis com letra minúscula*/
{
    private $nome = "";
    private $quantidade = 0;
    private $preco = 0;
    //Construtor
    public function __construct($n, $q, $p)
    {
        $this->nome = $n;
        $this->quantidade = $q;
        $this->preco = $p;
    }
    //Método (é mais tuilizado em Java)
    public function faturamentoMax()
    {
        $faturamentoMax = $this->quantidade * $this->preco;
        return $faturamentoMax;
    }
     //SET -> atribuir
    //GET -> retornar
    //encapsulamento -> acessar os atributos apenas por meio dos métodos
    public function setNome($n)
    {
        $this->nome = $n;
    }
    public function getNome()
    {
       return $this->nome;
        
    }
    public function setQuantidade(){
        $this->quantidade = $q;
        return $this->quantidade;
    }
    public function getQuantidade(){
       return $this->quantidade;
         
    }
    public function setPreco($p){
        $this->preco = $p;
    }
    public function getPreco(){
       return $this->preco;
    }
}
?>
