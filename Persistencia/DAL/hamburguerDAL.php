<?php
require_once '\var\www\html\Persistencia\db.php';

class hamburguerDAL {
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
            ':descricao' => $obj -> descricao,
            ':preco' => $obj -> preco
        );
        
        $sql = "INSERT INTO hamburguer (id, nome, descricao, preco)"
                . "VALUES (:id, :nome, :descricao, :preco)";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function excluir($chavePrimaria)
    {
        
        $sql = "DELETE FROM hamburguer WHERE id = :id";
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":id", $chavePrimaria);
        $retorno->execute();
        
        return $retorno->rowCount();
    }
    
    public function alterar($obj)
    {
        $parametros = array(
            ':id' => $obj -> produto_id,
            ':nome' => $obj -> nome,
            ':descricao' => $obj -> descricao,
            ':preco' => $obj -> preco,
        );
        
        $sql = "UPDATE hamburguer SET "
                . "nome = :nome, descricao = :descricao, preco = :preco WHERE id = :id";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function buscarPorChavePrimaria($chavePrimaria)
    {
        $sql=("SELECT * FROM hamburguer WHERE id = :id");
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
        $sql = "SELECT * FROM hamburguer ";
        //if(isset($filtro))
        //{
        //    $sql .= " WHERE nome ilike :filtro OR id ilike :filtro";
        //    $parametros[":filtro"] = "%".$filtro."%";
        //}
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
