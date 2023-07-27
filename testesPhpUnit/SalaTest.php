<?php require_once '../Classes/Cinema.php';

class SalaTest extends \PHPUnit\Framework\TestCase
{
    // Teste para verificar se a adição de salas no Cinema está funcionando corretamente.
    public function testAdicionarSala()
    {
        $sala = new Sala(1, 40);
        $cinema = new Cinema();
        $cinema->adicionarSala($sala);

        $this->assertCount(1, $cinema->getSalas()); // Verifica se há 1 sala adicionada.
        $this->assertEquals($sala, $cinema->buscarSala(1)); // Verifica se a sala adicionada pode ser encontrado no cinema.
    }

    // Teste para garantir que a adição da mesma sala duas vezes não resulte em duplicação no Cinema.
    public function testAdicionarSalaNaoAdicionaSalaDuplicada()
    {
        $sala = new Sala(1, 40);
        $cinema = new Cinema();
        $cinema->adicionarSala($sala);
        $cinema->adicionarSala($sala);

        $this->assertCount(1, $cinema->getSalas()); // Verifica se há apenas 1 sala adicionado mesmo após a adição duplicada.
    }

    // Teste para verificar se o Cinema pode encontrar uma Sala existente pelo seu ID.
    public function testBuscarSalaEncontraSalaExistente()
    {
        $sala = new Sala(1, 40);
        $cinema = new Cinema();
        $cinema->adicionarSala($sala);

        $numSala = $sala->getNumero();
        $this->assertEquals($sala, $cinema->buscarSala($numSala)); // Verifica se a sala pode ser encontrada usando seu número.
    }

    // Teste para verificar se o método buscarSala retorna NULL quando não encontra a Sala.
    public function testBuscarSalaRetornaNullSeSalaNaoExistir()
    {
        $cinema = new Cinema();
        $resultado = $cinema->buscarSala(5); // Procura uma sala com número inexistente.

        $this->assertNull($resultado); // Verifica se o resultado é NULL, indicando que a sala não foi encontrada.
    }

    // Teste para verificar se o Cinema pode remover uma sala existente pelo seu número.
    public function testRemoverSalaRemoveSalaExistente()
    {
        $sala = new Sala(1, 40);
        $cinema = new Cinema();
        $cinema->adicionarSala($sala);

        $numSala = $sala->getNumero();
        $this->assertNotNull($cinema->buscarSala($numSala)); // Verifica se a sala existe antes da remoção.

        $cinema->removerSala($numSala); // Remove a sala.
        $this->assertNull($cinema->buscarSala($numSala)); // Verifica se a sala não existe mais após a remoção.
    }

    // Teste para garantir que a remoção de uma sala inexistente não afete o Cinema.
    public function testRemoverSalaNaoRemoveSalaInexistente()
    {
        $numSala = 7; // Número de uma sala inexistente.
        $sala = new Sala(1,80);
        $sala2 = new Sala(2,70);
        $cinema = new Cinema();
        $cinema->adicionarSala($sala);
        $cinema->adicionarSala($sala2);

        $this->assertCount(2, $cinema->getSalas()); // Verifica o número de salas antes da remoção.

        $cinema->removerSala($numSala); // Tenta remover a sala inexistente.

        $this->assertCount(2, $cinema->getSalas()); // Verifica que o número de salas ainda é o mesmo (nenhuma sala foi removida).
    }
}