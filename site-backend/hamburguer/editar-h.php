<?php
if(!isset($_POST["nome"]) || !isset($_POST["preco"]) || !isset($_POST["descricao"]) )
{
    header("location:index.php");
}

require "../../Persistencia/modelo/hamburguer.php";
require "../../Persistencia/DAL/hamburguerDAL.php";

$obj = new Hamburguer();

$obj->nome = $_POST["nome"];
$obj->preco = $_POST["preco"];
$obj->descricao = $_POST["descricao"];

$dao = new HamburguerDAL();

$retorno = $dao->alterar($obj);
if($retorno > 0){
    $msg = "Registro alterado com sucesso";
}
else{
    $msg = "Não foi possível alterar o registro";
} 

?>

<div>
    <h1>Alterar Hamburguer</h1>
    <a href="index.php">Voltar</a>
</div>