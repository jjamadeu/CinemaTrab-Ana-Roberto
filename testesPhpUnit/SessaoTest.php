<?php require_once '../Classes/Cinema.php';
        
    class SessaoTest extends \PHPUnit\Framework\TestCase {
                
                
                //      TESTANDO O MÉTODO VENDER ASSENTOS
   
        public function testVenderAssentoComAssentosDisponiveis()
            {
                $sala = new Sala(1, 50); // Criar uma instância de Sala com 50 assentos
                $filme = new filme(1, 'Spider Man', 'Ação' , 'Filme de ação' , '10' , '180 min');
                $sessao = new Sessao(1,'14:00', '2023-01-01', $filme , $sala); // Criar uma instância de Sessao
                
                $sessao->venderAssento(3); // Tentar vender 3 assentos
                $this->assertEquals(3, $sessao->getAssentosVendidos()); // Verificar se a quantidade de assentos vendidos foi atualizada corretamente
            }
            
            public function testVenderAssentoSemAssentosDisponiveis()
            {
                $sala = new Sala(1,50); // Criar uma instância de Sala com 50 assentos
                $filme = new filme(1, 'Spider Man', 'Ação' , 'Filme de Super Herói' , '10' , '180 min');
                $sessao = new Sessao(1, '14:00', '2023-01-01', $filme, $sala); // Criar uma instância de Sessao
                
                $sessao->venderAssento(50); // Definir todos os assentos como vendidos
                $sessao->venderAssento(3); // Tentar vender 3 assentos
                $this->assertEquals(0, $sessao->getAssentosDisponiveis()); // Verificar se nenhuma venda ocorreu
            } 
                
            
                //      TESTANDO O MÉTODO ADICIONAR SESSAO

            
                public function testTamanhoVetorAdicionarSessao()
            {
                $sala = new Sala(1,50); 
                $filme = new filme(1, 'Spider Man', 'Ação' , 'Filme de Super Herói' , '10' , '180 min');
                $sala2 = new Sala(2,100); 
                $filme2 = new filme(2, 'Wall-e', 'Animação' , 'Desenhos Infantis' , 'L' , '120 min');
                $sessao = new Sessao(1, '14:00', '2023-01-01', $filme, $sala); 
                $sessao2 = new Sessao(2, '16:00', '2023-01-03', $filme2, $sala2); 
                
                $cinema = new Cinema();
                $cinema->adicionarSessao($sessao);
                $cinema->adicionarSessao($sessao2);

                $this->assertCount(2 , $cinema->getSessoes());
               
            }    
            
            public function testVetorComparandoObjetoAdicionarSessao()
            {
                $sala = new Sala(1,50); 
                $filme = new filme(1, 'Spider Man', 'Ação' , 'Filme de Super Herói' , '10' , '180 min');
                $sessao = new Sessao(1, '14:00', '2023-01-01', $filme, $sala); 
                
                $cinema = new Cinema();
                $cinema->adicionarSessao($sessao);

                $this->assertEquals([$sessao] , $cinema->getSessoes());
               
            } 

           public function testAdicionarSessaoAdicionaSessaoAoVetor()
            {
                $sala = new Sala(1,50); 
                $filme = new filme(1, 'Spider Man', 'Ação' , 'Filme de Super Herói' , '10' , '180 min');
                $sessao = new Sessao(1, '14:00', '2023-01-01', $filme, $sala);

                $cinema = new Cinema();
                $cinema->adicionarSessao($sessao);

                $sessoes = $cinema->getSessoes();

                $this->assertCount(1, $sessoes);
                $this->assertContains($sessao, $sessoes);
            }

            public function testAdicionarSessaoNaoAdicionaSessaoDuplicada()
            {
                $sala = new Sala(1,50); 
                $filme = new filme(1, 'Spider Man', 'Ação' , 'Filme de Super Herói' , '10' , '180 min');   
                $sessao = new Sessao(1, '14:00', '2023-01-01', $filme, $sala);

                $cinema = new Cinema();
                $cinema->adicionarSessao($sessao);
                $cinema->adicionarSessao($sessao);

                $sessoes = $cinema->getSessoes();

                $this->assertCount(1, $sessoes);
                $this->assertContains($sessao, $sessoes);
            }

        
                //      TESTANDO O MÉTODO BUSCAR SESSAO
           
            
                public function testBuscarSessaoEncontraSessaoExistente()
            {
                $filme = new filme(1, 'Spider Man', 'Ação' , 'Filme de Super Herói' , '10' , '180 min');
                $sala = new Sala(1,50); 
                $sessao = new Sessao(4, '18:00' , '24/10/2022' , $filme , $sala);                                         
                
                $cinema = new Cinema();
                $cinema->adicionarSessao($sessao);
                $idSessao = $sessao->getIdSessao();
                
                $this->assertEquals($idSessao,4);
            }

            public function testBuscarSessaoRetornaNullSeSessaoNaoExistir()
            {
                $cinema = new Cinema();
                $idSessao = 5;
                $resultado = $cinema->buscarSessao($idSessao);

                $this->assertNull($resultado);
            }

                
            //      TESTANDO O MÉTODO REMOVER SESSAO
            
            
                public function testRemoverSessaoRemoveSessaoExistente()
            {
                $filme = new filme(1, 'Spider Man', 'Ação' , 'Filme de Super Herói' , '10' , '180 min');
                $sala = new Sala(1,50); 
                $sessao = new Sessao(6, '14:00', '2023-01-01', $filme, $sala);
                
                $cinema = new Cinema();
                $cinema->adicionarSessao($sessao);
                $idSessao = $sessao->getIdSessao();
                $this->assertNotNull($cinema->buscarSessao($idSessao));

                $cinema->removerSessao($idSessao);

                $this->assertNull($cinema->buscarSessao($idSessao));
            }

            public function testRemoverSessaoNaoRemoveSessaoInexistente()
            {
                $idSessao = 7;
        
                $filme = new filme(1, 'Spider Man', 'Ação' , 'Filme de Super Herói' , '10' , '180 min');
                $sala = new Sala(1,50); 
                $sala2 = new Sala(2,100); 
                $filme2 = new filme(2, 'Wall-e', 'Animação' , 'Desenhos Infantis' , 'L' , '120 min');
                $sessao = new Sessao(1, '14:00', '2023-01-01', $filme, $sala); 
                $sessao2 = new Sessao(2, '16:00', '2023-01-03', $filme2, $sala2);
                 
                $cinema = new Cinema();
                $cinema->adicionarSessao($sessao);
                $cinema->adicionarSessao($sessao2);

                $this->assertCount(2, $cinema->getSessoes()); // Verifica o tamanho antes da remoção
                $cinema->removerSessao($idSessao);
                $this->assertCount(2, $cinema->getSessoes()); // Verifica que não houve remoção
            }
}