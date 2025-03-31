<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriasProdutosSeeder extends Seeder
{
    public function run(): void
    {
        $query = "
            INSERT INTO subcategoriasProdutos (id, sequencia, status, nome,slug, idCategoriaProduto, dataCadastro) VALUES
            ('321F74E876FF4BF48A4472AFD75580BB', 1, 'A', 'Acessórios','acessorios', 'F40836CBA9A24A29873A91DB801A5CB3', '2024-05-30 00:00:00'),
            ('561C28A6FAB544A5A9E5EC6D28A45723', 2, 'A', 'Calçados','calcados', 'F40836CBA9A24A29873A91DB801A5CB3', '2024-05-30 00:00:00'),
            ('6CB8983B4E434BCD89226BE078F47367', 3, 'A', 'Conjuntos','conjuntos', 'F40836CBA9A24A29873A91DB801A5CB3', '2024-05-30 00:00:00'),
            ('E230E895041F4F93B6D0952FAA3D6005', 4, 'A', 'Calça e Shorts','calca_e_shorts', 'F40836CBA9A24A29873A91DB801A5CB3', '2024-05-30 00:00:00'),
            ('DEF96EBE644F41BE95590E5E5A41BF79', 5, 'A', 'Camisetas e Body','camisetas_e_body', 'F40836CBA9A24A29873A91DB801A5CB3', '2024-05-30 00:00:00'),
            ('7891DA95C05249E38902CBCE5D6ED9A7', 6, 'A', 'Camisetas e Blusas','camisetas_e_blusas', 'F40836CBA9A24A29873A91DB801A5CB3', '2024-05-30 00:00:00'),
            ('9F5F4FE277E645FD883EAF7EB51CC1E2', 7, 'A', 'Casacos E Jaquetas','casacos_e_jaquetas', 'F40836CBA9A24A29873A91DB801A5CB3', '2024-05-30 00:00:00'),
            ('008878AD41724978A41918A0FC84B67D', 8, 'A', 'Macacões','macacoes', 'F40836CBA9A24A29873A91DB801A5CB3', '2024-05-30 00:00:00'),
            ('1C50B7B7D26A4741A6BEE739CAB667AC', 9, 'A', 'Vestidos e Saias','vestidos_e_saias', 'F40836CBA9A24A29873A91DB801A5CB3', '2024-05-30 00:00:00'),
            ('05ECE136A2E444739E71B0222BC4D2B6', 10, 'A', 'Mamadeiras e Chupetas','mamadeiras_e_chupetas', '2D419790CD9F404B9E742296A6428D80', '2024-05-30 00:00:00'),
            ('CADAFBD0034F47CD88B1529302AA969D', 11, 'A', 'Talheres e Pratinhos','talheres_pratinhos', '2D419790CD9F404B9E742296A6428D80', '2024-05-30 00:00:00'),
            ('F754C5B9180E4590B11F326F219B9BB6', 12, 'A', 'Copos e Garrafas','copos_e_garrafas', '2D419790CD9F404B9E742296A6428D80', '2024-05-30 00:00:00'),
            ('380E31AB6B6E4E7FB0492F3D4FA49647', 13, 'A', 'Cadeiras de Alimentação','cadeiras_de_alimentacao', '2D419790CD9F404B9E742296A6428D80', '2024-05-30 00:00:00'),
            ('385746CB30594A67ABB5A8203A05498D', 14, 'A', 'Bumbo e Assentos','bumbo_e_assentos', '2D419790CD9F404B9E742296A6428D80', '2024-05-30 00:00:00'),
            ('A6B7AEA9B78B4BE39C8FFDBC49B19271', 15, 'A', 'Bombinhas de Leite','bombinhas_de_leite', '2D419790CD9F404B9E742296A6428D80', '2024-05-30 00:00:00'),
            ('635C6BB5F5944066AD39B0B71CECD9B5', 16, 'A', 'Almofadas de Amamentação','almofadas_de_amamentacao', '2D419790CD9F404B9E742296A6428D80', '2024-05-30 00:00:00'),
            ('1A010DF08F8F4D9FB553D510C5F061A7', 17, 'A', 'Potes e Bolsas Térmicas de Amamentação','potes_e_bolsas_termicas_de_amamentacao', '2D419790CD9F404B9E742296A6428D80', '2024-05-30 00:00:00'),
            ('ACF765A8D23D49E282AB5354FA25F690', 18, 'A', 'Esterilizados','esterilizados', '2D419790CD9F404B9E742296A6428D80', '2024-05-30 00:00:00'),
            ('2BC6CAAA50494FB19EA092F587AF1510', 19, 'A', 'Berços e Camas','bercos_e_camas', 'AEFF6F1D12C44B359E22284CD538D400', '2024-05-30 00:00:00'),
            ('FAC3D882D6A44F83B5735EA3E236FA71', 20, 'A', 'Comodas e Guarda-Roupas','comodas_e_guarda_roupas', 'AEFF6F1D12C44B359E22284CD538D400', '2024-05-30 00:00:00'),
            ('85A67B37D476457D85732D54F715A1DA', 21, 'A', 'Poltronas de Amamentação','poltronas_de_amamentacao', 'AEFF6F1D12C44B359E22284CD538D400', '2024-05-30 00:00:00'),
            ('30464A3CD808457A994352B6E109B10C', 22, 'A', 'Prateleiras e Organizadores','prateleiras_e_organizadores', 'AEFF6F1D12C44B359E22284CD538D400', '2024-05-30 00:00:00'),
            ('8F9BACEC769E4476A86382029133AFE1', 23, 'A', 'Mesinhas e Cadeiras','mesinhas_e_cadeiras', 'AEFF6F1D12C44B359E22284CD538D400', '2024-05-30 00:00:00'),
            ('CD0C4667AC3F4AF8AA0AC2F104CD676F', 24, 'A', 'Papel de Parede e Adesivos','papel_de_parede_e_adesivos', 'AEFF6F1D12C44B359E22284CD538D400', '2024-05-30 00:00:00'),
            ('02314478692B435E928E2289903AF5BC', 25, 'A', 'Luminárias e Abajures','luminarias_e_abajures', 'AEFF6F1D12C44B359E22284CD538D400', '2024-05-30 00:00:00'),
            ('D4A0BD24867D45FF954240AD4AF8BF6B', 26, 'A', 'Quadros e Enfeites', 'quadros_enfeites', 'AEFF6F1D12C44B359E22284CD538D400', '2024-05-30 00:00:00'),
            ('085618C0D6F34EA48B55AE8347C211C6', 27, 'A', 'Grades e Cercadinhos','grades_e_cercadinhos', 'AEFF6F1D12C44B359E22284CD538D400', '2024-05-30 00:00:00'),
            ('5D4FE0BEEEBD45CB8158C7B1280B14D7', 28, 'A', 'Carrinhos de Passeio','carrinhos_de_passeios', '6481F73223484E85A6F01F8FA22FF597', '2024-05-30 00:00:00'),
            ('57D9D87FB24443C6AF8FCC57B5D2C91D', 29, 'A', 'Carrinhos Duplos','carrinhos_duplos', '6481F73223484E85A6F01F8FA22FF597', '2024-05-30 00:00:00'),
            ('D7B787A81AF645F182CAD05A33C024C7', 30, 'A', 'Cadeirinha p/ Carros','cadeirinha_p_carros', '6481F73223484E85A6F01F8FA22FF597', '2024-05-30 00:00:00'),
            ('E633D31D7EB14CA2874849AA37FAD06A', 31, 'A', 'Bebê Conforto','bebe_conforto', '6481F73223484E85A6F01F8FA22FF597', '2024-05-30 00:00:00'),
            ('0955520AA2D54963BC385D32818E9178', 32, 'A', 'Cangurus e Slings','cangurus_slings', '6481F73223484E85A6F01F8FA22FF597', '2024-05-30 00:00:00'),
            ('55562CB8DDAF48B39492EEF0C560B93D', 33, 'A', 'Bolsas de Maternidade','bolsas_de_maternidade', '6481F73223484E85A6F01F8FA22FF597', '2024-05-30 00:00:00'),
            ('B49A4C692A8241649BA08FB424F9CE70', 34, 'A', 'Protetores e Almofadas de Apoio','protetores_e_almofadas_de_apoio', '6481F73223484E85A6F01F8FA22FF597', '2024-05-30 00:00:00'),
            ('37E2A6B1EFC94FE48496AC99BFC0E883', 35, 'A', 'Chocalhos E Mordedores','chocalhos_e_mordedores', '84324FEB056043CEBA1F0BC796180F05', '2024-05-30 00:00:00'),
            ('AEA838A5890A44AAAFB9FFE4B9C5913B', 36, 'A', 'Tapetes e Ginásios','tapetes_e_ginasios', '84324FEB056043CEBA1F0BC796180F05', '2024-05-30 00:00:00'),
            ('FAF5F064778646498013206F9CBF379E', 37, 'A', 'Brinquedos Educativos','brinquedos_educativoso', '84324FEB056043CEBA1F0BC796180F05', '2024-05-30 00:00:00'),
            ('677953CB84B64221A9F7259397F7A37C', 38, 'A', 'Bonecas e Acessórios','bonecas_e_acessorios', '84324FEB056043CEBA1F0BC796180F05', '2024-05-30 00:00:00'),
            ('D769D21B3DBB47698ADA86F427210AE3', 39, 'A', 'Carrinhos e Véiculos','carrinhos_e_veiculos', '84324FEB056043CEBA1F0BC796180F05', '2024-05-30 00:00:00'),
            ('9CE8B94AD30A4A68B59BEB22062D74F8', 40, 'A', 'Blocos de Montar e Quebra-Cabeças','blocos_de_montar_e_quebra_cabecas', '84324FEB056043CEBA1F0BC796180F05', '2024-05-30 00:00:00'),
            ('92A62ED5DFE34531927697870A9C3381', 41, 'A', 'Bicicletas e Triciclos','bicicletas_e_triciclos', '84324FEB056043CEBA1F0BC796180F05', '2024-05-30 00:00:00'),
            ('C3D8A36DFA8C4A86BDA3830976728081', 42, 'A', 'Patinetes e Andadores','patinetes_e_andadores', '84324FEB056043CEBA1F0BC796180F05', '2024-05-30 00:00:00'),
            ('FCB03969F42E48A9B8CE3D91F3A3F9FA', 43, 'A', 'Piscinas e Brinquedos de Água','piscinas_e_briquedos_de_agua', '84324FEB056043CEBA1F0BC796180F05', '2024-05-30 00:00:00'),
            ('333CEABBA1364A868AF3DE47499D5A33', 44, 'A', 'Sabonetes e Shampoos','sabonetes_e_shampoos', '4E70C3E80A69477682889CACCDD5BB92', '2024-05-30 00:00:00'),
            ('7928B59F24E549788831C146415D7BA2', 45, 'A', 'Cremes e Protetores Solares','cremes_e_protetores_solares', '4E70C3E80A69477682889CACCDD5BB92', '2024-05-30 00:00:00'),
            ('15823C4214A34585940AF89E6BBF2072', 46, 'A', 'Banheiras e Acessórios','banheiras_e_acessorios', '4E70C3E80A69477682889CACCDD5BB92', '2024-05-30 00:00:00'),
            ('25C4EC7BDCC145D685AB276E427555B9', 47, 'A', 'Termômetros','termometros', '4E70C3E80A69477682889CACCDD5BB92', '2024-05-30 00:00:00'),
            ('8D3FE7FFB9CB4E4982BE93FF57BEEFEA', 48, 'A', 'Inaladores e Nebulizadores','inaladores_e_nebulizadores', '4E70C3E80A69477682889CACCDD5BB92', '2024-05-30 00:00:00'),
            ('2D45669C35904CFF99B4A5B1EB3E8BF3', 49, 'A', 'Fraldas e Toalhas Umidecidas','fraldas_e_toalhas_umidecidas', '4E70C3E80A69477682889CACCDD5BB92', '2024-05-30 00:00:00'),
            ('C64878DFDBAF480DB71C63493363163E', 50, 'A', 'Trocadores e Almofadas','trocadores_e_almofadas', '4E70C3E80A69477682889CACCDD5BB92', '2024-05-30 00:00:00'),
            ('7673F7693E8646DF8A4D814E7FFAECC1', 51, 'A', 'Lixeiras e Organizadores','lixeiras_e_organizadores', '4E70C3E80A69477682889CACCDD5BB92', '2024-05-30 00:00:00'),
            ('9084EBAC3A1242C9AAA1478E61EBABDD', 52, 'A', 'Livros de Histórias', 'livros_de_historias', '503B8FDD90474F2C9B5A093061C42EA5', '2024-05-30 00:00:00'),
            ('78DF2E1B39994107AACD70E79FA21AF6', 53, 'A', 'Livros Educativos', 'livros_educativos', '503B8FDD90474F2C9B5A093061C42EA5', '2024-05-30 00:00:00'),
            ('164C2FB949904EA98BA4DFFD0E5960A8', 54, 'A', 'Livros p/ Colorir','livros_p_colorir', '503B8FDD90474F2C9B5A093061C42EA5', '2024-05-30 00:00:00'),
            ('D63B5903A23C4707B16DA97ECC5316BF', 55, 'A', 'Revistas Infantis','revistas_infantis', '503B8FDD90474F2C9B5A093061C42EA5', '2024-05-30 00:00:00'),
            ('DFDD7248D40A4B55B49BD47DCAC04C01', 56, 'A', 'Lápis e Canetinhas','lapis_e_canetinhas', '503B8FDD90474F2C9B5A093061C42EA5', '2024-05-30 00:00:00'),
            ('F4C8FAD33D8541C7BED15A764BCC5211', 57, 'A', 'Brinquedos Sonoros','brinquedos_sonoros', '503B8FDD90474F2C9B5A093061C42EA5', '2024-05-30 00:00:00'),
            ('2297BB9006FF4502AEFADFC82DAE9B0D', 58, 'A', 'Tecladinhos e Instrumentos de Brinquedo','tecladinhos_e_instrumentos_de_brinquedo', '503B8FDD90474F2C9B5A093061C42EA5', '2024-05-30 00:00:00'),
            ('13B80ED6AF2B4DD2A1A720A95481C8F3', 59, 'A', 'Grade de Porta','grade_de_porta', '503B8FDD90474F2C9B5A093061C42EA6', '2024-05-30 00:00:00'),
            ('158C3E8A6AD949E09E779297770D93F8', 60, 'A', 'Protetores de Quina e Tomadas','protetores_de_quina_tomadas', '503B8FDD90474F2C9B5A093061C42EA6', '2024-05-30 00:00:00'),
            ('690A5B4E602240FBA540748E9934A7C2', 61, 'A', 'Travas de Segurança','travas_de_seguranca', '503B8FDD90474F2C9B5A093061C42EA6', '2024-05-30 00:00:00'),
            ('58DA27504A8A4F0DAEF602C4F53EBDD9', 62, 'A', 'Acessórios p/ Carrinho e Cadeirinha','acessorios_p_carrinho_e_cadeirinha', '503B8FDD90474F2C9B5A093061C42EA6', '2024-05-30 00:00:00'),
            ('58DA27504A8A4F0DAEF602C4F53EBEE9', 63, 'A', 'Mochilas, Bolsas e Malas','mochilas_bolsas_e_malas', '503B8FDD90474F2C9B5A093061C42EA6', '2024-05-30 00:00:00'),
            ('58DA27504A8A4F0DAEF602C4F53EBGG1', 64, 'A', 'Acessórios p/ Roupa','acessorios_p_roupa', '503B8FDD90474F2C9B5A093061C42EB5', '2024-05-30 00:00:00'),
            ('58DA27504A8A4F0DAEF602C4F53EBGG2', 65, 'A', 'Acessórios p/ Berço','acessorios_p_berco', '503B8FDD90474F2C9B5A093061C42EB5', '2024-05-30 00:00:00'),
            ('58DA27504A8A4F0DAEF602C4F53EBGG3', 66, 'A', 'Acessórios p/ Carro','acessorios_p_carro', '503B8FDD90474F2C9B5A093061C42EB5', '2024-05-30 00:00:00'),
            ('58DA27504A8A4F0DAEF602C4F53EBGG4', 67, 'A', 'Acessórios p/ Mochila, Bolsa e Mala','acessorios_p_mochila_bolsa_e_mala', '503B8FDD90474F2C9B5A093061C42EB5', '2024-05-30 00:00:00');
        ";

        DB::statement($query);
    }
}
