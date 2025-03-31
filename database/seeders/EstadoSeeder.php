<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    public function run(): void
    {
        $query = "INSERT INTO estados (sequencia, id, nome, sigla) VALUES
            (1, '674E8BA0B8704414BBACF0534CE08032', 'Acre', 'AC'),
            (2, '674E8BA0B8704414BBACF0534CE08033', 'Alagoas', 'AL'),
            (3, '674E8BA0B8704414BBACF0534CE08034', 'Amazonas', 'AM'),
            (4, '674E8BA0B8704414BBACF0534CE08035', 'Amapá', 'AP'),
            (5, '674E8BA0B8704414BBACF0534CE08036', 'Bahia', 'BA'),
            (6, '674E8BA0B8704414BBACF0534CE08037', 'Ceará', 'CE'),
            (7, '674E8BA0B8704414BBACF0534CE08038', 'Distrito Federal', 'DF'),
            (8, '674E8BA0B8704414BBACF0534CE08039', 'Espírito Santo', 'ES'),
            (9, '674E8BA0B8704414BBACF0534CE08040', 'Goiás', 'GO'),
            (10, '674E8BA0B8704414BBACF0534CE08041', 'Maranhão', 'MA'),
            (11, '674E8BA0B8704414BBACF0534CE08058', 'Minas Gerais', 'MG'),
            (12, '674E8BA0B8704414BBACF0534CE08042', 'Mato Grosso do Sul', 'MS'),
            (13, '674E8BA0B8704414BBACF0534CE08043', 'Mato Grosso', 'MT'),
            (14, '674E8BA0B8704414BBACF0534CE08044', 'Pará', 'PA'),
            (15, '674E8BA0B8704414BBACF0534CE08045', 'Paraíba', 'PB'),
            (16, '674E8BA0B8704414BBACF0534CE08046', 'Pernambuco', 'PE'),
            (17, '674E8BA0B8704414BBACF0534CE08047', 'Piauí', 'PI'),
            (18, '674E8BA0B8704414BBACF0534CE08048', 'Paraná', 'PR'),
            (19, '674E8BA0B8704414BBACF0534CE08049', 'Rio de Janeiro', 'RJ'),
            (20, '674E8BA0B8704414BBACF0534CE08050', 'Rio Grande do Norte', 'RN'),
            (21, '674E8BA0B8704414BBACF0534CE08051', 'Rondônia', 'RO'),
            (22, '674E8BA0B8704414BBACF0534CE08052', 'Roraima', 'RR'),
            (23, '674E8BA0B8704414BBACF0534CE08053', 'Rio Grande do Sul', 'RS'),
            (24, '674E8BA0B8704414BBACF0534CE08054', 'Santa Catarina', 'SC'),
            (25, '674E8BA0B8704414BBACF0534CE08055', 'Sergipe', 'SE'),
            (26, '674E8BA0B8704414BBACF0534CE08056', 'São Paulo', 'SP'),
            (27, '674E8BA0B8704414BBACF0534CE08057', 'Tocantins', 'TO');";
        DB::statement($query);
    }
}
