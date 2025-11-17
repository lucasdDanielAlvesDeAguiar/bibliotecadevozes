<?php

namespace BibliotecaDeVozes\Login;

class Usuario
{
    private int $id;
    private string $nome;
    private string $email;
    public string $buscarVoz;

    public function __construct(int $id, string $nome, string $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
