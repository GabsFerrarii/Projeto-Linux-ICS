<?php
require_once '/var/www/html/Persistencia/db.php';

class comboDAL {
    private $pdo;
    
    public function __construct() {
        $conexao = new Conexao();
        $this->pdo = $conexao->getPDO();
    }
    
    
    public function inserir($obj)
    {
        $parametros = array(
            ':id' => $obj -> id,
            ':nome' => $obj -> nome,
            ':hamburguer_id' => $obj -> hamburguer_id,
            ':bebida_id' => $obj -> bebida_id,
            ':preco' => $obj -> preco
        );
        
        $sql = "INSERT INTO combo (id, nome, hamburguer_id, bebida_id, preco)"
                . "VALUES (:id, :nome, :hamburguer_id, :bebida_id, :preco)";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function excluir($chavePrimaria)
    {
        
        $sql = "DELETE FROM combo WHERE id = :id";
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":id", $chavePrimaria);
        $retorno->execute();
        
        return $retorno->rowCount();
    }
    
    public function alterar($obj)
    {
        $parametros = array(
            ':id' => $obj -> id,
            ':nome' => $obj -> nome,
            ':hamburguer_id' => $obj -> hamburguer_id,
            ':bebida_id' => $obj -> bebida_id,
            ':preco' => $obj -> preco,
        );
        
        $sql = "UPDATE combo SET "
                . "nome = :nome, hamburguer_id = :hamburguer_id, bebida_id = :bebida_id, preco = :preco WHERE id = :id";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function buscarPorChavePrimaria($chavePrimaria)
    {
        $sql=("SELECT * FROM combo WHERE id = :id");
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":id", $chavePrimaria);
        $retorno->execute();
       
        if($obj=$retorno->fetchObject())
        {
            return $obj;
        }
        else
        {
            return null;
        }
    }
    
    public function listar($filtro=null,$ordenarPor=null)
    {
        $parametros = array();
        $sql = "SELECT * FROM combo ";
        $lista = array();
        $query = $this->pdo->prepare($sql);
        
        $query->execute($parametros);
        
        //Percorrer meus registros, tratando-os como objeto
        while ($obj = $query->fetchObject()){
            $lista[] = $obj;
        }
        
        return $lista;
    }
}

?>