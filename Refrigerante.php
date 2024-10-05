<?php
require_once 'Bebida.php';
class Refrigerante extends Bebida
{
    //atributos
    private $retornavel;
    //gets e sets
    public function setRetorno($retornavel)
    {
        $this->retornavel = $retornavel;
    }
    public function getRetorno()
    {
        return $this->retornavel;
    }
    //demais metodos
    public function mostrarBebida()
    {
        $dados = "Nome: " . $this->getNome() . " </br> Preço: " . $this->getPreco() . " </br> Retornável: " . $this->getRetorno();
        return $dados;
    }
    public function verificarPreco()
    {
        $retorno = false;
        if ($this->getPreco() < 5) {
            $retorno = true;
            return $retorno;
        } else {
            return $retorno;
        }
    }
}
