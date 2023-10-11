<?php
#VisitanteDao
# DAO -> Data Access Object -> Objeto de Acesso aos dados

namespace Ifba\Visitas\model;

class VisitanteDao extends \Ifba\Visitas\core\Dao{
    
    public function inserir($model)
    {
        $sql = "INSERT INTO visitantes (nome,data) VALUES (?,?)";
        
        $sqlpreparado = $this->conexao->prepare($sql);

        $sqlpreparado->bindValue(1,$model->nome);
        $sqlpreparado->bindValue(2,$model->data);

        $sqlpreparado->execute();


    }
}