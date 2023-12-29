<?php

class Combo {
    
    private $id;
    private $nome;
    private $hamburguer_id;
    private $bebida_id;
    private $preco;
    
    public function __get($key){
        return $this->$key;
     }
     
    public function __set($key, $value){
        $this->$key = $value;
     }
}

?>