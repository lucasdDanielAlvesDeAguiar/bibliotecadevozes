<?php

use BibliotecaDeVozes\BibliotecaDeVozes\Voz;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Voz::class)]
class VozTest extends Testcase
{
    public function testVozExistente()
    {
         $voz = new Voz(1, "Teste", "A", "Voz A");

         
        $l = new Voz(1, "test", "A", 5.0, 2);
        $this->assertEquals(1,$l->getId());
          $this->assertEquals("Teste", $voz->getNome());
    }
}