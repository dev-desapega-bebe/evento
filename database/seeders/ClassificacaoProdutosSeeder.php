<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificacaoProdutosSeeder extends Seeder
{
    public function run(): void
    {
        $query = "
            INSERT INTO classificacaoProdutos (id, sequencia, status, nome, slug, dataCadastro) VALUES
            ('F40836CBA9A24A29873A1F8FA22FF560', 1, 'A', '0 a 12 meses', '0_a_12_meses', '2024-05-30 00:00:00'),
            ('F40836CBA9A24A29873A1F8FA22FF561', 2, 'A', '1 a 3 anos', '1_a_3_anos', '2024-05-30 00:00:00'),
            ('2D419790CD9F404B9E741F8FA22FF562', 3, 'A', '3 a 5 anos', '3_a_5_anos', '2024-05-30 00:00:00'),
            ('4E70C3E80A69477682881F8FA22FF563', 4, 'A', '5 a 10 anos', '5_a_10_anos', '2024-05-30 00:00:00'),
            ('4E70C3E80A69477682881F8FA22FF564', 5, 'A', 'Acima 10 anos', 'acima_10_anos', '2024-05-30 00:00:00');
        ";

        DB::statement($query);
    }
}
