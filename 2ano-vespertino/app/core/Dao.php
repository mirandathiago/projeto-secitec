<?php
#Pasta core -> Vai ser a pasta em que irão ficar os arquivos BASE DA APLICAÇÃO. 
namespace Ifba\Visitas\core;

abstract class Dao{




    #Uma classe abstrata ela deixa de poder ser instanciada e passa a só poder ser herdada. Esta classe também permite ser tratada como um contrato de implementação em que podemos somente definir as assinaturas dos métodos que as classes que extenderem desta são obrigados a implementar.

    protected \PDO $conexao;
    #PDO -> Classe Nativa de conexao com o Banco de Dados -> PHP DATA OBJECT -> Trabalha com a Manipulação de BDs.    
    public function __construct()
    {
        $servidor = "localhost";
        $banco = "visitas_2vesp";
        $usuario = "root";
        $senha = "";

        $string = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($string,$usuario,$senha);
       

    }
    #Este método é apenas uma assinatura e todas as classes que herdarem desta são obrigados a criar um método inserir.
    public abstract function inserir($model);

}