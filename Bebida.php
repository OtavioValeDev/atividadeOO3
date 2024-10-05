<?php
abstract class Bebida
{
    //declaraçao de atributos
    private $nome;
    private $preco;
    //metodos de acesso
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
    public function getPreco()
    {
        return $this->preco;
    }

    abstract function mostrarBebida();
    abstract function verificarPreco();
}
