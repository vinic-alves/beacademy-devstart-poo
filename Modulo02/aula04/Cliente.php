<?php

declare(strict_types=1);
// a palavra final não permite a extensão de uma classe
final class Cliente extends Usuario

{
    private string $dataCadastro;
    public function getDataCadastro(): string
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro(string $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;
    }
 
}