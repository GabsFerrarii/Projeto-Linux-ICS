<?php
if(!isset($_POST["nome"]) || !isset($_POST["preco"]) || !isset($_POST["descricao"]) )
{
    header("location:index.php");
}

require "../../Persistencia/Modelo/bebida.php";
require "../../Persistencia/DAL/bebidaDAL.php";

$obj = new Bebida();

$obj->nome = $_POST["nome"];
$obj->preco = $_POST["preco"];
$obj->descricao = $_POST["descricao"];

$dao = new BebidaDAL();

$retorno = $dao->alterar($obj);
if($retorno > 0){
    $msg = "Registro alterado com sucesso";
}
else{
    $msg = "Não foi possível alterar o registro";
} 

?>

<div>
    <h1>Alterar Bebida</h1>
    <h2><?php echo $msg; ?></h2>
    <a href="index.php">Voltar</a>
</div>