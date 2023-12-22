<?php
   if(!isset($_GET["id"]))
    {
      header("location: index.php");
    }
    
    require '../../Persistencia/Modelo/bebida.php';
    require '../../Persistencia/DAL/bebidaDAL.php';
    
    $bebida_id = $_GET["id"];
    $dao = new BebidaDAL();
    $obj = $dao->buscarPorChavePrimaria($bebida_id);

    if($obj == null)
    {
        header("location: index.php");
    } 
    
?>

<label for="nome">Nome:</label>
<input type="text" value="<?php echo $obj->bebida_nome ?>" readonly name="nome"/>
<label for="preco">Preço:</label>
<input type="number" value="<?php echo $obj->bebida_preco ?>" readonly name="preco"/>
<label for="descricao">Descrição:</label>
<input type="text" value="<?php echo $obj->bebida_descricao ?>" readonly name="descricao"/>
<a href="index.php" class="btn">Voltar</a>
<a href="editar-hamburguer.php?id=<?php echo $obj->bebida_id?>" class="btn btn-warning" >Editar</a>