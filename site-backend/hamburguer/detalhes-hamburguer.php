<?php
   if(!isset($_GET["id"]))
    {
      header("location: index.php");
    }
    
    require '../../Persistencia/Modelo/hamburguer.php';
    require '../../Persistencia/DAL/hamburguerDAL.php';
    
    $hamburguer_id = $_GET["id"];
    $dao = new HamburguerDAL();
    $obj = $dao->buscarPorChavePrimaria($hamburguer_id);

    if($obj == null)
    {
        header("location: index.php");
    } 
    
?>

<label for="nome">Nome:</label>
<input type="text" value="<?php echo $obj->nome ?>" readonly name="nome"/>
<label for="preco">Preço:</label>
<input type="number" value="<?php echo $obj->preco ?>" readonly name="preco"/>
<label for="descricao">Descrição:</label>
<input type="text" value="<?php echo $obj->descricao ?>" readonly name="descricao"/>
<a href="index.php" class="btn">Voltar</a>
<a href="editar-hamburguer.php?id=<?php echo $obj->id?>" class="btn btn-warning" >Editar</a>
