<?php

namespace BibliotecaDeVozes\BibliotecaDeVozes;

class Voz
{
    private int $id;
    private string $nome;
    private string $autor;
    private string $voz;

    public function __construct(int $id, string $nome, string $autor, string $voz)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->autor = $autor;
        $this->voz = $voz;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getAutor(): string
    {
        return $this->autor;
    }
    public function getVoz(): string
    {
        return $this->voz;
    }
}
