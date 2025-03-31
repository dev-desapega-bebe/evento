<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $sql = "
            INSERT INTO generoProdutos (id, sequencia, status, nome,slug, dataCadastro) VALUES
            ('5DC40DCC09C143BFB9B835707C0AB3A4', 1, 'A', 'Unissex', 'unissex', '2024-05-30 00:00:00'),
            ('AC4ECAF8151546BE9018FD7B4AE2F3B0', 2, 'A', 'Masculino', 'masculino', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81572FA', 3, 'A', 'Feminino', 'feminino', '2024-05-30 00:00:00');
        ";

        DB::statement($sql);
    }
}
