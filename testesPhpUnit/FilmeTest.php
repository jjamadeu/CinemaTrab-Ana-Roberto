<?php require_once '../Classes/Cinema.php';

class FilmeTest extends \PHPUnit\Framework\TestCase
{
    // Teste para verificar se a adição de filmes no Cinema está funcionando corretamente.
    public function testAdicionarFilme()
    {
        $filme = new Filme(1, 'Spider Man', 'Ação', 'Filme de Super Herói', '10', '180 min');
        $cinema = new Cinema();
        $cinema->adicionarFilme($filme);

        $this->assertCount(1, $cinema->getFilmes()); // Verifica se há 1 filme adicionado.
        $this->assertEquals($filme, $cinema->buscarFilme(1)); // Verifica se o filme adicionado pode ser encontrado no cinema.
    }

    // Teste para garantir que a adição do mesmo filme duas vezes não resulte em duplicação no Cinema.
    public function testAdicionarFilmeNaoAdicionaFilmeDuplicado()
    {
        $filme = new Filme(1, 'Spider Man', 'Ação', 'Filme de Super Herói', '10', '180 min');
        $cinema = new Cinema();
        $cinema->adicionarFilme($filme);
        $cinema->adicionarFilme($filme);

        $this->assertCount(1, $cinema->getFilmes()); // Verifica se há apenas 1 filme adicionado mesmo após a adição duplicada.
    }

    // Teste para verificar se o Cinema pode encontrar um filme existente pelo seu ID.
    public function testBuscarFilmeEncontraFilmeExistente()
    {
        $filme = new Filme(1, 'Spider Man', 'Ação', 'Filme de Super Herói', '10', '180 min');
        $cinema = new Cinema();
        $cinema->adicionarFilme($filme);

        $idFilme = $filme->getIdFilme();
        $this->assertEquals($filme, $cinema->buscarFilme($idFilme)); // Verifica se o filme pode ser encontrado usando seu ID.
    }

    // Teste para verificar se o método buscarFilme retorna NULL quando não encontra o filme.
    public function testBuscarFilmeRetornaNullSeFilmeNaoExistir()
    {
        $cinema = new Cinema();
        $resultado = $cinema->buscarFilme(5); // Procura um filme com ID inexistente.

        $this->assertNull($resultado); // Verifica se o resultado é NULL, indicando que o filme não foi encontrado.
    }

    // Teste para verificar se o Cinema pode remover um filme existente pelo seu ID.
    public function testRemoverFilmeRemoveFilmeExistente()
    {
        $filme = new Filme(1, 'Spider Man', 'Ação', 'Filme de Super Herói', '10', '180 min');
        $cinema = new Cinema();
        $cinema->adicionarFilme($filme);

        $idFilme = $filme->getIdFilme();
        $this->assertNotNull($cinema->buscarFilme($idFilme)); // Verifica se o filme existe antes da remoção.

        $cinema->removerFilme($idFilme); // Remove o filme.
        $this->assertNull($cinema->buscarFilme($idFilme)); // Verifica se o filme não existe mais após a remoção.
    }

    // Teste para garantir que a remoção de um filme inexistente não afete o Cinema.
    public function testRemoverFilmeNaoRemoveFilmeInexistente()
    {
        $idFilme = 7; // ID de um filme inexistente.
        $filme = new Filme(1, 'Spider Man', 'Ação', 'Filme de Super Herói', '10', '180 min');
        $filme2 = new Filme(2, 'Wall-e', 'Animação', 'Desenhos Infantis', 'L', '120 min');
        $cinema = new Cinema();
        $cinema->adicionarFilme($filme);
        $cinema->adicionarFilme($filme2);

        $this->assertCount(2, $cinema->getFilmes()); // Verifica o número de filmes antes da remoção.

        $cinema->removerFilme($idFilme); // Tenta remover o filme inexistente.

        $this->assertCount(2, $cinema->getFilmes()); // Verifica que o número de filmes ainda é o mesmo (nenhum filme foi removido).
    }

    }

