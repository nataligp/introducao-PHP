<?php
    require_once("pessoa.class.php");

    class Teste{
        private $pessoa;

        public function __construct(){
            $pessoa = new Pessoa();

            $pessoa->setNome("");
            $pessoa->setEndereco("");
            $pessoa->setBairro("");
            $pessoa->setCep("");
            $pessoa->setCidade("");
            $pessoa->setEstado("");

            echo "Nome: ".$pessoa->getNome()."<br><br>";
            echo "Endereço: ".$pessoa->getEndereco()."<br><br>";
            echo "Bairro: ".$pessoa->getBairro()."<br><br>";
            echo "CEP: ".$pessoa->getCep()."<br><br>";
            echo "Cidade: ".$pessoa->getCidade()."<br><br>";
            echo "Estado: ".$pessoa->getEstado()."<br><br>";

        }
    }
    new Teste();


?>