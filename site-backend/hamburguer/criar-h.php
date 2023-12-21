<?php
    
   require '../../Persistencia/DAL/hamburguerDAL.php';
   require '../../Persistencia/modelo/hamburguer.php';
   
   $hamburguer = new Hamburguer();
   
   $hamburguer->nome = $_POST["nome"];
   $hamburguer->preco = $_POST["preco"];
   $hamburguer->descricao = $_POST["descricao"];
   
   $dao = new HamburguerDAL();
   $retorno = $dao ->inserir($hamburguer);
   
?>