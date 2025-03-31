<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasProdutosSeeder extends Seeder
{
    public function run(): void
    {
        $query = "
            INSERT INTO categoriasProdutos (id, sequencia, status, nome, slug, descricao, icone, dataCadastro) VALUES
            ('F40836CBA9A24A29873A91DB801A5CB3', 1, 'A', 'Roupas e Calçados', 'roupas_e_calcados', 'Explore estilos únicos para cada ocasião', 'fa-shirt', '2024-05-30 00:00:00'),
            ('2D419790CD9F404B9E742296A6428D80', 2, 'A', 'Alimentação', 'alimentacao' , 'Nutrição completa para os pequenos', 'fa-person-breastfeeding', '2024-05-30 00:00:00'),
            ('AEFF6F1D12C44B359E22284CD538D400', 3, 'A', 'Móveis e Decoração', 'moveis_e_decoracao' , 'Transforme o quarto do seu bebê em um mundo de sonhos', 'fa-toilet-portable', '2024-05-30 00:00:00'),
            ('6481F73223484E85A6F01F8FA22FF597', 4, 'A', 'Passeio e Transporte', 'passeio_e_transporte' , 'Segurança e conforto em cada passeio', 'fa-baby-carriage', '2024-05-30 00:00:00'),
            ('84324FEB056043CEBA1F0BC796180F05', 5, 'A', 'Brinquedos e Jogos', 'brinquedos_e_jogos', 'Diversão garantida para desenvolver habilidades desde cedo', 'fa-table-tennis-paddle-ball', '2024-05-30 00:00:00'),
            ('4E70C3E80A69477682889CACCDD5BB92', 6, 'A', 'Higiene e Saúde', 'higiene_e_saude' , 'Momentos de cuidado e carinho diário', 'fa-bath', '2024-05-30 00:00:00'),
            ('503B8FDD90474F2C9B5A093061C42EA5', 7, 'A', 'Educação e Aprendizado', 'educacao_e_aprendizado' , 'Ciclo de descoberta e crescimento', 'fa-book', '2024-05-30 00:00:00'),
            ('503B8FDD90474F2C9B5A093061C42EA6', 8, 'A', 'Segurança', 'seguranca' , 'Proteja seu bebê com os melhores produtos de segurança', 'fa-hands-holding-child', '2024-05-30 00:00:00'),
            ('503B8FDD90474F2C9B5A093061C42EA7', 9, 'A', 'Bolsas', 'bolsas' , 'Uma extensão prática do nosso dia a dia', 'fa-briefcase', '2024-05-30 00:00:00'),
            ('503B8FDD90474F2C9B5A093061C42EB5', 10, 'A', 'Acessórios', 'acessorios' , 'Complemento do visual e facilitadores do nosso dia a dia', 'fa-wand-magic-sparkles', '2024-05-30 00:00:00');
        ";

        DB::statement($query);
    }
}
