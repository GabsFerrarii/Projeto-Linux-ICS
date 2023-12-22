<?php
    
   require '../../Persistencia/DAL/bebidaDAL.php';
   require '../../Persistencia/Modelo/bebida.php';
   
   $bebida = new Bebida();
   
   $bebida->nome = $_POST["nome"];
   $bebida->preco = $_POST["preco"];
   $bebida->descricao = $_POST["descricao"];
   
   $dao = new BebidaDAL();
   $retorno = $dao ->inserir($bebida);
   
?>

<div>
    <h1>Criar Bebida</h1>
    <a href="index.php">Voltar</a>
</div>