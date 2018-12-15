<?php
namespace App\Vendas;

class Produto {
    public $id,$descricao;
    
    public function cadastrar($id,$descricao) {
        $this->id = $id;
        $this->descricao = $descricao;
    }
    
    public function imprimir() {
        $r = 'Produto Id :'.$this->id.' | ';
        $r .= 'Descrição :'.$this->descricao.'<br>';
        return $r;
    }
}
