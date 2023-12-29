<?php
if(!isset($_POST["nome"]) || !isset($_POST["preco"]) || !isset($_POST["hamburguer_id"]) || !isset($_POST["bebida_id"]))
{
    header("location:index.php");
}

require "../Persistencia/Modelo/combo.php";
require "../Persistencia/DAL/comboDAL.php";

$obj = new Combo();

$obj->id = $_POST["id"];
$obj->nome = $_POST["nome"];
$obj->preco = $_POST["preco"];
$obj->hamburguer_id = $_POST["hamburguer_id"];
$obj->bebida_id = $_POST["bebida_id"];

$dao = new ComboDAL();

$retorno = $dao->alterar($obj);
if($retorno > 0){
    $msg = "Registro alterado com sucesso";
}
else{
    $msg = "Não foi possível alterar o registro";
} 

?>

<div>
    <h1>Alterar Combo</h1>
    <h2><?php echo $msg; ?></h2>
    <a href="index.php">Voltar</a>
</div>