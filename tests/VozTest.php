<?php

use BibliotecaDeVozes\BibliotecaDeVozes\Voz;
use PHPUnit\Framework\Testcase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Voz::class)]
class VozTest extends Testcase
{
    public function testVozExistente()
    {
        $l = new Voz(1, "test", "A", 5.0, 2);
        $this->assertEquals(1,$l->getId());
    }
}