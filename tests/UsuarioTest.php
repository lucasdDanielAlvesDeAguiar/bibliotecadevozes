<?php

use BibliotecaDeVozes\BibliotecaDeVozes\Voz;
use BibliotecaDeVozes\Login\Usuario;
use PHPUnit\Framework\Testcase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Usuario::class)]
class UsuarioTest extends Testcase
{
    public function testBaixarVoz()
    {
        $usuario = new Usuario(1,'Lucas','lucas@bibvozes.com');
        $this->assertEquals(1,$usuario->getId());
        $this->assertEquals('Lucas',$usuario->getNome());
        $this->assertEquals('lucas@bibvozes.com',$usuario->getEmail());

    }
}