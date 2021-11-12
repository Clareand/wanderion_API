<?php

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void_province
     */
    public function run()
    {
        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id_province' => '11',
                'name' => 'ACEH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_province' => '12',
                'name' => 'SUMATERA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_province' => '13',
                'name' => 'SUMATERA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_province' => '14',
                'name' => 'RIAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_province' => '15',
                'name' => 'JAMBI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_province' => '16',
                'name' => 'SUMATERA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id_province' => '17',
                'name' => 'BENGKULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id_province' => '18',
                'name' => 'LAMPUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id_province' => '19',
                'name' => 'KEPULAUAN BANGKA BELITUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id_province' => '21',
                'name' => 'KEPULAUAN RIAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id_province' => '31',
                'name' => 'DKI JAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id_province' => '32',
                'name' => 'JAWA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id_province' => '33',
                'name' => 'JAWA TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id_province' => '34',
                'name' => 'DI YOGYAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id_province' => '35',
                'name' => 'JAWA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id_province' => '36',
                'name' => 'BANTEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id_province' => '51',
                'name' => 'BALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id_province' => '52',
                'name' => 'NUSA TENGGARA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id_province' => '53',
                'name' => 'NUSA TENGGARA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id_province' => '61',
                'name' => 'KALIMANTAN BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id_province' => '62',
                'name' => 'KALIMANTAN TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id_province' => '63',
                'name' => 'KALIMANTAN SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id_province' => '64',
                'name' => 'KALIMANTAN TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id_province' => '65',
                'name' => 'KALIMANTAN UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id_province' => '71',
                'name' => 'SULAWESI UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id_province' => '72',
                'name' => 'SULAWESI TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id_province' => '73',
                'name' => 'SULAWESI SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id_province' => '74',
                'name' => 'SULAWESI TENGGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id_province' => '75',
                'name' => 'GORONTALO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id_province' => '76',
                'name' => 'SULAWESI BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id_province' => '81',
                'name' => 'MALUKU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id_province' => '82',
                'name' => 'MALUKU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id_province' => '91',
                'name' => 'PAPUA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id_province' => '94',
                'name' => 'PAPUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
    }
}
