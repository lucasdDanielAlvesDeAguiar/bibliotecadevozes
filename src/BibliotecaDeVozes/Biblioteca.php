<?php 
namespace BibliotecaDeVozes\BibliotecaDeVozes;

class Biblioteca{
    private array $vozes;
      public function __construct () {
        $this->vozes = [
            new Vozes(1, "miku", "roberta carlas de tritanicas", 39.90, 10),
            new Vozes(2, "nero", "roberta carlas de tritanicas", 29.90, 5),
            new Vozes(3, "teto", "roberta carlas de tritanicas", 39.90, 10)
        ] ;
      }

      public function   buscarPorCantor(string $vozes): array {
        return array_filter($this->vozes, fn($i) => str_contains(strtolower($i->getCantor()), strtolower($cantor)));
      }

      public function   buscarportema(string $vozes): array {
        return array_filter($this->vozes, fn($i) => str_contains(strtolower($i->getTema()), strtolower($tema)));
      }

      public function getVozes(): array
      {
        return $this->vozes;
      }
}