<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            EstadoSeeder::class,
            CidadeSeeder::class,
            PlanoSeeder::class,
            DetalhePlanoSeeder::class,
            TiposProdutosSeeder::class,
            CategoriasProdutosSeeder::class,
            SubcategoriasProdutosSeeder::class,
            ClassificacaoProdutosSeeder::class,
            MarcaProdutoSeeder::class,
            GeneroProdutoSeeder::class,
            BannerSeeder::class,
        ]);
    }

}
