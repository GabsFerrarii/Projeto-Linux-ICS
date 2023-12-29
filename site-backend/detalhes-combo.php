<?php
   if(!isset($_GET["id"]))
    {
      header("location: index.php");
    }
    
    require '../Persistencia/Modelo/combo.php';
    require '../Persistencia/DAL/comboDAL.php';
    
    $combo_id = $_GET["id"];
    $dao = new ComboDAL();
    $obj = $dao->buscarPorChavePrimaria($combo_id);

    if($obj == null)
    {
        header("location: index.php");
    } 
    
?>

<label for="nome">Nome:</label>
<input type="text" value="<?php echo $obj->nome ?>" readonly name="nome"/>
<label for="preco">Preço:</label>
<input type="number" value="<?php echo $obj->preco ?>" readonly name="preco"/>
<label for="hamburguer_id">Hamburguer_ID:</label>
<input type="number" value="<?php echo $obj->hamburguer_id ?>" readonly name="hamburguer_id"/>
<label for="bebida_id">Bebida_ID:</label>
<input type="number" value="<?php echo $obj->bebida_id ?>" readonly name="bebida_id"/>

<a href="index.php" class="btn">Voltar</a>
<a href="editar-combo.php?id=<?php echo $obj->id?>" >Editar</a>