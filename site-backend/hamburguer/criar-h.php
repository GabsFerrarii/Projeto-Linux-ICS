<?php
    
   require '../../Persistencia/DAL/hamburguerDAL.php';
   require '../../Persistencia/Modelo/hamburguer.php';
   
   $hamburguer = new Hamburguer();
   
   $hamburguer->nome = $_POST["nome"];
   $hamburguer->preco = $_POST["preco"];
   $hamburguer->descricao = $_POST["descricao"];
   
   $dao = new HamburguerDAL();
   $retorno = $dao ->inserir($hamburguer);
   
?>

<div>
    <h1>Criar Hamburguer</h1>
    <a href="index.php">Voltar</a>
</div>
