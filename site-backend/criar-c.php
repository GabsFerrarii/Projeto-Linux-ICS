<?php
    
   require '../Persistencia/DAL/comboDAL.php';
   require '../Persistencia/Modelo/combo.php';
   
   $combo = new Combo();
   
   $combo->nome = $_POST["nome"];
   $combo->preco = $_POST["preco"];
   $combo->hamburguer_id = $_POST["hamburguer_id"];
   $combo->bebida_id = $_POST["bebida_id"];
   
   $dao = new ComboDAL();
   $retorno = $dao ->inserir($combo);
   
?>

<div>
    <h1>Criar Combo</h1>
    <a href="index.php">Voltar</a>
</div>