<?php
require_once 'Bebida.php';
class Suco extends Bebida
{
    //atributos
    private $sabor;
    //gets e sets
    public function setSabor($sabor)
    {
        $this->sabor = $sabor;
    }
    public function getSabor()
    {
        return $this->sabor;
    }

    //métodos abstratos
    public function mostrarBebida()
    {
        //caso for exibir váriaveis, sempre utilize as aspas duplas e não a unica 
        $dados = "Nome: " . $this->getNome() . " </br> Preço: " . $this->getPreco() . " </br> Sabor: " . $this->getSabor();
        return $dados;
    }
    public function verificarPreco()
    {
        $retorno = false;
        if ($this->getPreco() < 2.5) {
            $retorno = true;
            return $retorno;
        } else {
            return $retorno;
        }
    }
}
