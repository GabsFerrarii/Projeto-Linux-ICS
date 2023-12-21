<?php

class Produto {
    
    private $id;
    private $nome;
    private $descricao;
    private $foto;
    private $preco;
    
    public function __get($key){
        return $this->$key;
     }
     
    public function __set($key, $value){
        $this->$key = $value;
     }
}

?>
