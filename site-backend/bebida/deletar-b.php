<?php
    if(!isset($_GET["id"]))
    {
        header("location:index.php");
    }

    $id = $_GET["id"];
    
    require '../../Persistencia/DAL/bebidaDAL.php';
    
    $dao = new BebidaDAL();
    
    $retorno = $dao->excluir($id);
    
    if($retorno > 0)
    {
        $msg = "Registro excluído com sucesso";
    }
    else
    {
        $msg = "Não foi possível excluir o registro. Verifique dependências";
    }

?>

<div>
    <h1>Deletar Bebida</h1>
    <h2><?php echo $msg; ?></h2>
    <a href="index.php">Voltar</a>
</div>