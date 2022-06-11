<?php

declare(strict_types=1);

class Produto
{    
    //Atributos
    private string $nome;
    private float $valor;

    //metodos
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $novoNome): void //void significa função sem retorno
    {
        $this->nome = $novoNome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $novoValor): void
    {
        if($novoValor < 0){
            die("Ops, Valor não pode ser negativo");    // die função para disparar erro
        }
        $this->valor = $novoValor;
    }
}   

