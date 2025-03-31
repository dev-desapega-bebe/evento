<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $sql = "
            INSERT INTO marcaProdutos (id, sequencia, status, nome,slug, dataCadastro) VALUES
            ('5DC40DCC09C143BFB9B835707C0AB319', 1, 'A', 'All Star', 'all_start', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB328', 2, 'A', 'Alakazoo','alakazoo', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB337', 3, 'A', 'Adidas','adidas', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB346', 4, 'A', 'Anjos baby','anjos_baby', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB355', 5, 'A', 'Bambini','bambini', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB364', 6, 'A', 'Barbie','barbie', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB373', 7, 'A', 'Bibi','bibi', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB382', 8, 'A', 'Brandili','brandili', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB391', 9, 'A', 'Buba','buba', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB310', 10, 'A', 'C&A','ca', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB311', 11, 'A', 'Calvin Klein','calvin_klein', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB312', 12, 'A', 'Candide','candide', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB313', 13, 'A', 'Carters','carters', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB314', 14, 'A', 'Chicco','chicco', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB315', 15, 'A', 'DC Comics','dc_comics', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB316', 16, 'A', 'Disney','disney', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB317', 17, 'A', 'Editora Ática','editora_atica', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB318', 18, 'A', 'Editora Leiturinha','editora_leiturinha', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB359', 19, 'A', 'Estrela','estrela', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB320', 20, 'A', 'Fuzarka','fuzarka', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81522FA', 21, 'A', 'ZigMundi','zigmundi', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB322', 22, 'A', 'Gap Kids','gap_kids', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB323', 23, 'A', 'Garanimals','garanimals', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB324', 24, 'A', 'Grendene','grendene', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB325', 25, 'A', 'Grow','grow', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB326', 26, 'A', 'Gymboree','gymborre', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB327', 27, 'A', 'H&M','hm', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB358', 28, 'A', 'Hello Kitty','hello_kitty', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB329', 29, 'A', 'Hrradinhos','hrradinhos', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB330', 30, 'A', 'Havaianas','havaianas', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB331', 31, 'A', 'Ipanema','ipanema', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB332', 32, 'A', 'Jacadi Paris','jacadi_paris', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB333', 33, 'A', 'Johnson & Johnson','johnson_johnson', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB334', 34, 'A', 'Kiabi','kiabi', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB335', 35, 'A', 'Klin','klin', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB336', 36, 'A', 'Kinder Brasil','kinder_brasil', '2024-05-30 00:00:00'),
            ('5DC40DCC09C143BFB9B835707C0AB377', 37, 'A', 'Lacoste','lascote', '2024-05-30 00:00:00'),
            ('AC4ECAF8151546BE9018FD7B4AE2F3B0', 38, 'A', 'Lego','lego', '2024-05-30 00:00:00'),
            ('AC4ECAF8151546BE9018FD7B4AE2F3B1', 39, 'A', 'LOL Surprise','lol_surprise', '2024-05-30 00:00:00'),
            ('AC4ECAF8151546BE9018FD7B4AE2F3B2', 40, 'A', 'Lilica Ripilica','lilica_ripilica', '2024-05-30 00:00:00'),
            ('AC4ECAF8151546BE9018FD7B4AE2F3B3', 41, 'A', 'Malwee','malwee', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81591FA', 42, 'A', 'Mattel','mattel', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81582FA', 43, 'A', 'Marisa','marisa', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81573FA', 44, 'A', 'Molekinha','molekinha', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81564FA', 45, 'A', 'Marvel','marvel', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81555FA', 46, 'A', 'Melissa','melissa', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81546FA', 47, 'A', 'Náutica','nautica', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81537FA', 48, 'A', 'Nike','nike', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81528FA', 49, 'A', 'Ortopasso','ortpasso', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81529FA', 50, 'A', 'Ortopé','ortope', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81510FA', 51, 'A', 'Puma','puma', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81511FA', 52, 'A', 'Quimby','quimby', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81512FA', 53, 'A', 'Reserva','reserva', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81513FA', 54, 'A', 'Star Wars','star_wars', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81514FA', 55, 'A', 'Sunny','sunny', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81515FA', 56, 'A', 'Tigor','tigor', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81516FA', 57, 'A', 'Trick Nick','trick_nick', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81517FA', 58, 'A', 'Um mais um','um_mais_um', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81518FA', 59, 'A', 'Up Baby','up_baby', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81519FA', 60, 'A', 'Vans','vans', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81520FA', 61, 'A', 'Vrasalon','vrasalon', '2024-05-30 00:00:00'),
            ('D14A18D3D3E94904AF84267DC81521FA', 62, 'A', 'Zara','zara', '2024-05-30 00:00:00');
        ";

        DB::statement($sql);
    }
}
