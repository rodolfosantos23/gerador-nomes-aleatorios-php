<?php

namespace App\Models;

/**
 * Class NomeAleatorio
 * @author Rodolfo Santos <rodolfosantos23@gmail.com>
 *
 * Gera um nome aleatório
 */
class NomeAleatorio
{
    /**
     * Lista fixa de nomes comuns femininos
     * @var array $nomesFemininos
     */
    private $nomesFemininos = ['Agatha', 'Agnes', 'Aisha', 'Alexandra', 'Alexia', 'Alice', 'Alícia', 'Ana Clara', 'Ana Júlia', 'Ana Laura', 'Ana Luísa', 'Ana Luiza', 'Andréia', 'Ângela', 'Anita', 'Antonella', 'Antônia', 'Ariane', 'Beatriz', 'Betina', 'Carina', 'Carol', 'Catarina', 'Cecília', 'Cibele', 'Clara', 'Clarice', 'Cristiana', 'Cristiane', 'Dandara', 'Daniele', 'Dayane', 'Denise', 'Diane', 'Edna', 'Eliana', 'Elisa', 'Elisângela', 'Elizabeth', 'Ellen', 'Eloá', 'Eloah', 'Emanuelly', 'Emmanuelle', 'Érika', 'Estela', 'Esther', 'Eva', 'Fabiana', 'Franciele', 'Francisca', 'Gabriela', 'Gabriele', 'Giovanna', 'Giulia', 'Hannah', 'Helena', 'Heloísa', 'Iara', 'Inês', 'Íris', 'Isabele', 'Isabella', 'Isabelle', 'Isabelly', 'Isadora', 'Isis', 'Izabele', 'Jade', 'Jenifer', 'Joseane', 'Júlia', 'Kamila', 'Karine', 'Karoline', 'Kátia', 'Keila', 'Kiara', 'Laiane', 'Laila', 'Laísa', 'Lana', 'Lara', 'Laura', 'Lavínia', 'Lia', 'Lídia', 'Lilian', 'Lis', 'Lívia', 'Liz', 'Lorena', 'Lorraine', 'Louise', 'Lúcia', 'Ludmila', 'Luiza', 'Maíra', 'Maísa', 'Maitê', 'Malu', 'Manuela', 'Mara', 'Margarida', 'Maria Alice', 'Maria Cecília', 'Maria Clara', 'Maria Eduarda', 'Maria Helena', 'Maria Júlia', 'Maria Luísa', 'Maria Luiza', 'Maria Vitória', 'Mariah', 'Mariana', 'Marília', 'Marina', 'Marisa', 'Marlene', 'Marta', 'Melissa', 'Micaela', 'Michelle', 'Miriam', 'Natalie', 'Natasha', 'Nayara', 'Ohana', 'Olívia', 'Paloma', 'Paola', 'Pérola', 'Rafaela', 'Rayssa', 'Rebeca', 'Regina', 'Rita', 'Rosa', 'Rosângela', 'Rute', 'Safira', 'Samantha', 'Samira', 'Sarah', 'Sheila', 'Silvana', 'Sílvia', 'Solange', 'Sônia', 'Sophia', 'Sophie', 'Sueli', 'Tainara', 'Tânia', 'Thalia', 'Thamires', 'Valentina', 'Valéria', 'Vânia', 'Verônica', 'Victória', 'Vivian', 'Yasmin'];

    /**
     * Lista fixa de nomes comuns masculinos
     * @var array $nomesMasculinos
     */
    private $nomesMasculinos = ['Alan', 'Alexandre', 'Alison', 'Anderson', 'André', 'Anthony', 'Antônio', 'Arthur', 'Benício', 'Benjamin', 'Bento', 'Bernardo', 'Bruno', 'Bryan', 'Caio', 'Calebe', 'Carlos', 'Cauã', 'César', 'Cristiano', 'Daniel', 'Davi', 'Davi Lucca', 'David', 'Diogo', 'Douglas', 'Eduardo', 'Emanuel', 'Enrico', 'Enzo', 'Enzo Gabriel', 'Fábio', 'Felipe', 'Fernando', 'Francisco', 'Gabriel', 'Gael', 'Guilherme', 'Gustavo', 'Heitor', 'Henrique', 'Hugo', 'Isaac', 'Jesus', 'João', 'João Lucas', 'João Miguel', 'João Pedro', 'Joaquim', 'Jonathan', 'José', 'Júlio', 'Júnior', 'Leandro', 'Leonardo', 'Levi', 'Lorenzo', 'Luan', 'Lucas', 'Lucca', 'Luciano', 'Luiz', 'Marcelo', 'Marcos', 'Mateus', 'Matheus', 'Miguel', 'Murilo', 'Nicolas', 'Noah', 'Pablo', 'Paulo', 'Pedro', 'Pedro Henrique', 'Pietro', 'Rafael', 'Ricardo', 'Samuel', 'Théo', 'Tiago', 'Vicente', 'Vinícius', 'Vitor', 'Wesley', 'William'];

    /**
     * Lista fixa de sobrenomes comuns
     * @var array $sobrenomes
     */
    private $sobrenomes = ['Abreu', 'Adães', 'Adorno', 'Aguiar', 'Albuquerque', 'Alcântara', 'Aleluia', 'Alencar', 'Almeida', 'Altamirano', 'Alvarenga', 'Álvares', 'Alves', 'Alvim', 'Amaral', 'Amigo', 'Amor', 'Amorim', 'Anchieta', 'Andrada', 'Andrade', 'Anes', 'Anjos', 'Antunes', 'Anunciação', 'Aragão', 'Araújo', 'Arruda', 'Ascensão', 'Assis', 'Azeredo', 'Azevedo', 'Bandeira', 'Barbosa', 'Barros', 'Barroso', 'Bastos', 'Batista', 'Bermudes', 'Bernades', 'Bernardes', 'Bicalho', 'Bispo', 'Bocaiuva', 'Bolsonaro', 'Borba', 'Borges', 'Borsoi', 'Botelho', 'Braga', 'Bragança', 'Brandão', 'Brasil', 'Brasiliense', 'Bueno', 'Cabral', 'Café', 'Camacho', 'Camargo', 'Caminha', 'Camões', 'Cardoso', 'Carmo', 'Carnaval', 'Carneiro', 'Carvalhal', 'Carvalho', 'Carvalhosa', 'Castilho', 'Castro', 'Cerejeira', 'Chaves', 'Coelho', 'Coentrão', 'Coimbra', 'Constante', 'Cordeiro', 'Costa', 'Cotrim', 'Couto', 'Coutinho', 'Cruz', 'Cunha', 'Curado', 'Dambros', 'Dias', 'Diegues', 'Dorneles', 'Duarte', 'Eça', 'Encarnação', 'Esteves', 'Evangelista', 'Exaltação', 'Fagundes', 'Faleiros', 'Falópio', 'Falqueto', 'Faria', 'Farias', 'Faro', 'Ferrão', 'Ferraz', 'Ferreira', 'Ferrolho', 'Fernandes', 'Figo', 'Figueira', 'Figueiredo', 'Figueiroa', 'Fioravante', 'Fonseca', 'Fontes', 'Fortaleza', 'França', 'Freire', 'Freitas', 'Frota', 'Furquim', 'Furtado', 'Galvão', 'Gama', 'Garrastazu', 'Gato', 'Gomes', 'Gonçales', 'Gonçalves', 'Gonzaga', 'Gouveia', 'Guimarães', 'Gusmão', 'Henriques', 'Hernandes', 'Holanda', 'Homem', 'Hora', 'Hungria', 'Jardim', 'Junqueira', 'Lacerda', 'Lange', 'Leitão', 'Leite', 'Leme', 'Lins', 'Locatelli', 'Lopes', 'Luz', 'Macedo', 'Machado', 'Madureira', 'Maduro', 'Magalhães', 'Mairinque', 'Malafaia', 'Malta', 'Mariz', 'Marques', 'Martins', 'Massa', 'Matos', 'Médici', 'Meireles', 'Mello', 'Melo', 'Mendes', 'Mendonça', 'Menino', 'Mesquita', 'Miranda', 'Moraes', 'Morais', 'Morato', 'Moreira', 'Moro', 'Monteiro', 'Muniz', 'Namorado', 'Nantes', 'Nascimento', 'Navarro', 'Naves', 'Negreiros', 'Negrete', 'Neves', 'Nóbrega', 'Nogueira', 'Noronha', 'Nunes', 'Oliva', 'Oliveira', 'Outeiro', 'Pacheco', 'Padrão', 'Paes', 'Pais', 'Paiva', 'Paixão', 'Papanicolau', 'Parga', 'Pascal', 'Pascoal', 'Pasquim', 'Patriota', 'Peçanha', 'Pedrosa', 'Pedroso', 'Peixoto', 'Pensamento', 'Penteado', 'Pereira', 'Peres', 'Pessoa', 'Pestana', 'Pimenta', 'Pimentel', 'Pinheiro', 'Pinto', 'Pires', 'Poeta', 'Policarpo', 'Porto', 'Portugal', 'Prado', 'Prudente', 'Quaresma', 'Queirós', 'Queiroz', 'Ramalhete', 'Ramalho', 'Ramires', 'Ramos', 'Rangel', 'Reis', 'Resende', 'Ribeiro', 'Rios', 'Rodrigues', 'Roma', 'Romão', 'Sá', 'Sacramento', 'Sampaio', 'Sampaulo', 'Sampedro', 'Sanches', 'Santacruz', 'Santana', 'Santander', 'Santarrosa', 'Santiago', 'Santos', 'Saragoça', 'Saraiva', 'Saramago', 'Seixas', 'Serra', 'Serrano', 'Silva', 'Silveira', 'Simões', 'Siqueira', 'Soares', 'Soeiro', 'Sousa', 'Souza', 'Tavares', 'Teixeira', 'Teles', 'Torquato', 'Trindade', 'Uchoa', 'Uribe', 'Ustra', 'Valadares', 'Valença', 'Valente', 'Varela', 'Vasconcelos', 'Vasques', 'Vaz', 'Veiga', 'Velasques', 'Veloso', 'Viana', 'Vieira', 'Vilela', 'Vilhena', 'Xavier', 'Zampol'];

    /**
     * Retorna um merge dos nomes femininos e masculinos
     * @return array
     */
    private function getNomes()
    {
        return array_merge($this->nomesFemininos, $this->nomesMasculinos);
    }

    /**
     * Gera um nome do tipo Masculino, Feminino ou Todos se vazio
     * @param string|null $tipo
     * @return string
     */
    public function sorteiaNome($tipo = null)
    {
        switch ($tipo) {
            case 'F':
                $listaNomes = $this->nomesFemininos;
                break;
            case 'M':
                $listaNomes = $this->nomesMasculinos;
                break;
            default:
                $listaNomes = $this->getNomes();
                break;
        }

        return $listaNomes[rand(0, count($listaNomes) - 1)];
    }

    /**
     * Gera um sobrenome aleatório com total de sobrenomes eviado por parâmetro
     * ou caso nulo sorteado entre 2 e 4
     *
     * @param int $totalSobrenomes
     * @return string
     */
    public function sorteiaSobrenome($totalSobrenomes = false)
    {
        // Se não foi enviado o total sorteia um valor entre 2 e 4
        if (!$totalSobrenomes || !is_numeric($totalSobrenomes)) {
            $totalSobrenomes = rand(2, 4);
        }

        // Sobrenomes Escolhidos
        $sobrenomesEscolhidos = [];

        // Sobrenome que será retornado
        $sobrenomeCompleto = '';

        // Contador
        $i = 0;

        // Laço
        while ($i < $totalSobrenomes) {
            // Sorteia um sobrenome
            $sobrenomeSorteado = $this->sobrenomes[rand(0, count($this->sobrenomes) - 1)];

            // Verifica se já não foi sorteado para não repetir
            // Caso repita pula o laço
            if (in_array($sobrenomeSorteado, $sobrenomesEscolhidos)) {
                continue;
            }

            // Joga o sobrenome escolhido no array de sorteados
            $sobrenomesEscolhidos[] = $sobrenomeSorteado;

            // Concatena os sobrenomes
            $sobrenomeCompleto .= ' ' . $sobrenomeSorteado;

            // Intera o contador
            $i++;
        }

        return $sobrenomeCompleto;
    }

    /**
     * Gera o nome completo
     * @param string|null $tipo
     * @param int $totalSobrenomes
     */
    public function geraNome($tipo = null, $totalSobrenomes = null)
    {
        return $this->sorteiaNome($tipo) . $this->sorteiaSobrenome($totalSobrenomes);
    }
}
