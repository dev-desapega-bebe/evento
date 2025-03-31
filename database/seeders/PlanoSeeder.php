<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanoSeeder extends Seeder
{

    public function run(): void
    {
        $query = "
            INSERT INTO planos (id, sequencia, status, nome, descricao, descricaoTrimestral, valorMensal, valorTrimestral, tipo, periodoTeste, limiteAnuncio, limitePrateleira, dataCadastro) VALUES
            ('9A5E0116A01547928FC2EF51AD90973A', 1, 'A', 'Silver', 'Ideal para pequenos negócios ou quem está começando! Exponha seus produtos e tenha a flexibilidade de até 50 anúncios ativos', 'De R$ <del>599,70</del><br>Por R$ 525,00<br><span class=\"font-semibold\">Economize R$ 74,70!</span>', 199.9000, 525.0000, 'P', 7, 50, 100, '2024-05-30 00:00:00'),
            ('EB2BD5DAE3194F7187EC179E80792FF3', 2, 'A', 'Gold', 'Para lojas que desejam mais visibilidade! Com 100 anúncios ativos, sua vitrine fica mais completa', 'De R$ <del>1.199,70</del><br>Por R$ 999,90<br><span class=\"font-semibold\">Economize R$ 199,80!</span>', 399.9000, 999.9000, 'P', 0, 100, 300, '2024-05-30 00:00:00'),
            ('E9B32E8190FB4E60B02BBC8442F42363', 3, 'A', 'Diamond', 'Máximo de visibilidade! Exponha até 200 produtos para atrair mais clientes e alavanque suas vendas', 'De R$ <del>1.799,70</del><br>Por R$ 1499,90<br><span class=\"font-semibold\">Economize R$ 299,80!</span>', 599.9000, 1499.9000, 'P', 0, 200.,600, '2024-05-30 00:00:00'),
            ('E9B32E8190FB4E60B02BBC8442F42344', 4, 'A', 'Anúncio Telão Principal', 'Destaque premium para lojistas que desejam uma visibilidade elevada e estratégica', 'De R$ <del>2.997,00</del><br>Por R$ 1999,00<br><span class=\"font-semibold\">Economize R$ 998,00!</span>', 999.0000, 1999.0000, 'MB', 0, '2024-05-30 00:00:00'),
            ('E9B32E8190FB4E60B02BBC8442F42355', 5, 'A', 'Anúncio Telão Secundário', 'Excelente visibilidade para sua marca ou loja, exibindo seu anúncio em áreas estratégicas da página', 'De R$ <del>1.197,00</del><br>Por R$ 899,00<br><span class=\"font-semibold\">Economize R$ 298,00!</span>', 399.0000, 899.0000, 'SB', 0, '2024-05-30 00:00:00');
        ";
        DB::statement($query);
    }

}
