<?php
require_once 'Bebida.php';

class Vinho extends Bebida
{
    //declaração de atributos
    private $safra;
    private $tipo;


    //metodos de acesso

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setSafra($safra)
    {
        $this->safra = $safra;
    }
    public function getSafra()
    {
        return $this->safra;
    }


    //demais métodos
    public function mostrarBebida()
    {
        $dados = "Nome: " . $this->getNome() . " </br> Preço: " . $this->getPreco() . " </br> Safra: " . $this->getSafra() . " </br> Tipo: " . $this->getTipo();
        return $dados;
    }

    public function verificarPreco()
    {
        $retorno = false;
        if ($this->getPreco() < 25) {
            $retorno = true;
            return $retorno;
        } else {
            return $retorno;
        }
    }
}
