<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposProdutosSeeder extends Seeder
{
    public function run(): void
    {
        $query = "
            INSERT INTO tiposProdutos (id,sequencia,status,nome,slug,dataCadastro) VALUES
            ('BB3136531777421F84732A5AB8DDE9D7', 1, 'A', 'Novo', 'novo', '2024-05-30 00:00:00'),
            ('257AA1AC5E3D4FBE90D736EAB200589D', 2, 'A', 'Usado', 'usado', '2024-05-30 00:00:00'),
            ('37C80CE53C2E4BE09CD2DCE005229A41', 3, 'A', 'Promoção', 'promocao', '2024-05-30 00:00:00');
        ";
        DB::statement($query);
    }
}
