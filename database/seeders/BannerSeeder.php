<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{

    public function run(): void
    {
        $query = "
             INSERT INTO banners (id, sequencia, status, tipo, imagem, imagemMobile, link, title, dataCadastro, statusAprovacao) VALUES
            ('9A5E0116A01047928FC2EF51AD909100', 1, 'A', 'MB', '/images/banners/main/banner001.png', '/images/banners/main/mobile/banner001.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos para Lojistas', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A01147928FC2EF51AD909101', 2, 'A', 'MB', '/images/banners/main/banner002.png', '/images/banners/main/mobile/banner002.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos para Lojistas', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A01247928FC2EF51AD909102', 3, 'A', 'MB', '/images/banners/main/banner003.png', '/images/banners/main/mobile/banner003.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos anúncio avulso', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A01347928FC2EF51AD909103', 4, 'A', 'MB', '/images/banners/main/banner004.png', '/images/banners/main/mobile/banner004.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos anúncio avulso', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A01347928FC2EF51AD909104', 5, 'A', 'MB', '/images/banners/main/banner005.png', '/images/banners/main/mobile/banner005.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos anúncio avulso', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A01347928FC2EF51AD909105', 6, 'A', 'MB', '/images/banners/main/banner006.png', '/images/banners/main/mobile/banner006.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos anúncio avulso', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A01347928FC2EF51AD909106', 7, 'A', 'MB', '/images/banners/main/banner007.png', '/images/banners/main/mobile/banner007.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos anúncio avulso', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A01347928FC2EF51AD909107', 8, 'A', 'MB', '/images/banners/main/banner008.png', '/images/banners/main/mobile/banner008.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos anúncio avulso', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A01347928FC2EF51AD909108', 9, 'A', 'MB', '/images/banners/main/banner009.png', '/images/banners/main/mobile/banner009.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos anúncio avulso', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A01347928FC2EF51AD909109', 10, 'A', 'MB', '/images/banners/main/banner010.png', '/images/banners/main/mobile/banner010.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42344', 'Acessar planos anúncio avulso', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A02047928FC2EF51AD909110', 11, 'A', 'SB', '/images/banners/sidebar/banner001.jpg', null, '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A02147928FC2EF51AD909111', 12, 'A', 'SB', '/images/banners/sidebar/banner002.jpg', null, '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A02247928FC2EF51AD909112', 13, 'A', 'SB', '/images/banners/sidebar/banner003.jpg', null, '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A02347928FC2EF51AD909113', 14, 'A', 'SB', '/images/banners/sidebar/banner004.jpg', null, '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A02447928FC2EF51AD909114', 15, 'A', 'SB', '/images/banners/sidebar/banner005.jpg', null, '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A02447928FC2EF51AD909123', 23, 'A', 'SB', '/images/banners/sidebar/banner006.jpg', null, '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A02447928FC2EF51AD909124', 24, 'A', 'SB', '/images/banners/sidebar/banner007.jpg', null, '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A03047928FC2EF51AD909120', 16, 'A', 'CB', '/images/banners/content/banner001.png', '/images/banners/content/mobile/banner001.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A03147928FC2EF51AD909121', 17, 'A', 'CB', '/images/banners/content/banner002.png', '/images/banners/content/mobile/banner002.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A03247928FC2EF51AD909122', 18, 'A', 'CB', '/images/banners/content/banner003.png', '/images/banners/content/mobile/banner003.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A03347928FC2EF51AD909123', 19, 'A', 'CB', '/images/banners/content/banner004.png', '/images/banners/content/mobile/banner004.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A03447928FC2EF51AD909124', 20, 'A', 'CB', '/images/banners/content/banner005.png', '/images/banners/content/mobile/banner005.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A03447928FC2EF51AD909125', 21, 'A', 'CB', '/images/banners/content/banner006.png', '/images/banners/content/mobile/banner006.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO'),
            ('9A5E0116A03447928FC2EF51AD909126', 22, 'A', 'CB', '/images/banners/content/banner007.png', '/images/banners/content/mobile/banner007.png', '/plano/anuncio/E9B32E8190FB4E60B02BBC8442F42355', 'Acessar planos para divulgação', '2024-05-30 00:00:00', 'APROVADO');
        ";

        DB::statement($query);
    }

}
