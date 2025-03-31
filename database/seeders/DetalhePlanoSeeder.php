<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalhePlanoSeeder extends Seeder
{
    public function run(): void
    {
        $query = "
            INSERT INTO detalhesPlanos (id, sequencia, status, descricao, dataCadastro, dataAlteracao, idPlano) VALUES
            ('9A5E0116A01547928FC2EF51AD90971A', 1, 'A', '50 anúncios', '2024-05-30 00:00:00', '2024-05-30 00:00:00', '9A5E0116A01547928FC2EF51AD90973A'),
            ('9A5E0116A01547928FC2EF51AD90972B', 2, 'A', '100 prateleira', '2024-05-30 00:00:00', '2024-05-30 00:00:00', '9A5E0116A01547928FC2EF51AD90973A'),
            ('EB2BD5DAE3194F7187EC179E80792FF3', 3, 'A', '100 anúncios', '2024-05-30 00:00:00', '2024-05-30 00:00:00', 'EB2BD5DAE3194F7187EC179E80792FF3'),
            ('E9B32E8190FB4E60B02BBC8442F42364', 4, 'A', '300 prateleira', '2024-05-30 00:00:00', '2024-05-30 00:00:00', 'EB2BD5DAE3194F7187EC179E80792FF3'),
            ('9A5E0116A01547928FC2EF51AD90973C', 5, 'A', '200 anúncios', '2024-05-30 00:00:00', '2024-05-30 00:00:00', 'E9B32E8190FB4E60B02BBC8442F42363'),
            ('9A5E0116A01547928FC2EF51AD90973D', 6, 'A', '600 prateleira', '2024-05-30 00:00:00', '2024-05-30 00:00:00', 'E9B32E8190FB4E60B02BBC8442F42363');
        ";
        DB::statement($query);
    }
}
