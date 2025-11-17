<?php
use PHPUnit\Framework\Testcase;
use BibliotecaDeVozes\BibliotecaDeVozes\Biblioteca;
use BibliotecaDeVozes\BibliotecaDeVozes\Voz;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Biblioteca::class)]
class BibliotecaTest extends Testcase {

public function testBuscarPorVoz(){
    $l1 = new Voz(1, "PHP para iniciantes", "autor X", 10.0,5);
    $l2 = new Voz(2, "aprenda java", "autor Y", 12.0, 3);
    $bib = new Biblioteca([$l1, $l2]);
    $this->assertCount(3, $bib->getVozes());
}
}