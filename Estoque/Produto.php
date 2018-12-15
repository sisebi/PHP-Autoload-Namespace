<?php
namespace Estoque;

class Produto {
    private $id,$descricao,$qtd;
    
    public function cadastrar($id,$descricao,$qtd) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->qtd = $qtd;
    }
    
    public function imprimir() {
        $r = 'Codigo Produto :'.$this->id.'|';
        $r .= 'Descrição :'.$this->descricao.'<br>';
        $r .= 'Quantidade :'.$this->qtd.'<br>';
        
        return $r;
    }
    
    
}
