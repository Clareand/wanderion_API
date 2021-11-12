<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void_city
     */
    public function run()
    {
        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id_city' => '1101',
                'id_province' => '11',
                'name' => 'KABUPATEN SIMEULUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_city' => '1102',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH SINGKIL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_city' => '1103',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_city' => '1104',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH TENGGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_city' => '1105',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_city' => '1106',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id_city' => '1107',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id_city' => '1108',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH BESAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id_city' => '1109',
                'id_province' => '11',
                'name' => 'KABUPATEN Pid_cityIE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id_city' => '1110',
                'id_province' => '11',
                'name' => 'KABUPATEN BIREUEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id_city' => '1111',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id_city' => '1112',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH BARAT DAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id_city' => '1113',
                'id_province' => '11',
                'name' => 'KABUPATEN GAYO LUES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id_city' => '1114',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH TAMIANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id_city' => '1115',
                'id_province' => '11',
                'name' => 'KABUPATEN NAGAN RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id_city' => '1116',
                'id_province' => '11',
                'name' => 'KABUPATEN ACEH JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id_city' => '1117',
                'id_province' => '11',
                'name' => 'KABUPATEN BENER MERIAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id_city' => '1118',
                'id_province' => '11',
                'name' => 'KABUPATEN Pid_cityIE JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id_city' => '1171',
                'id_province' => '11',
                'name' => 'KOTA BANDA ACEH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id_city' => '1172',
                'id_province' => '11',
                'name' => 'KOTA SABANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id_city' => '1173',
                'id_province' => '11',
                'name' => 'KOTA LANGSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id_city' => '1174',
                'id_province' => '11',
                'name' => 'KOTA LHOKSEUMAWE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id_city' => '1175',
                'id_province' => '11',
                'name' => 'KOTA SUBULUSSALAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id_city' => '1201',
                'id_province' => '12',
                'name' => 'KABUPATEN NIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id_city' => '1202',
                'id_province' => '12',
                'name' => 'KABUPATEN MANDAILING NATAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id_city' => '1203',
                'id_province' => '12',
                'name' => 'KABUPATEN TAPANULI SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id_city' => '1204',
                'id_province' => '12',
                'name' => 'KABUPATEN TAPANULI TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id_city' => '1205',
                'id_province' => '12',
                'name' => 'KABUPATEN TAPANULI UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id_city' => '1206',
                'id_province' => '12',
                'name' => 'KABUPATEN TOBA SAMOSIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id_city' => '1207',
                'id_province' => '12',
                'name' => 'KABUPATEN LABUHAN BATU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id_city' => '1208',
                'id_province' => '12',
                'name' => 'KABUPATEN ASAHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id_city' => '1209',
                'id_province' => '12',
                'name' => 'KABUPATEN SIMALUNGUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id_city' => '1210',
                'id_province' => '12',
                'name' => 'KABUPATEN DAIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id_city' => '1211',
                'id_province' => '12',
                'name' => 'KABUPATEN KARO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id_city' => '1212',
                'id_province' => '12',
                'name' => 'KABUPATEN DELI SERDANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id_city' => '1213',
                'id_province' => '12',
                'name' => 'KABUPATEN LANGKAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id_city' => '1214',
                'id_province' => '12',
                'name' => 'KABUPATEN NIAS SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id_city' => '1215',
                'id_province' => '12',
                'name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id_city' => '1216',
                'id_province' => '12',
                'name' => 'KABUPATEN PAKPAK BHARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id_city' => '1217',
                'id_province' => '12',
                'name' => 'KABUPATEN SAMOSIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id_city' => '1218',
                'id_province' => '12',
                'name' => 'KABUPATEN SERDANG BEDAGAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id_city' => '1219',
                'id_province' => '12',
                'name' => 'KABUPATEN BATU BARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id_city' => '1220',
                'id_province' => '12',
                'name' => 'KABUPATEN PADANG LAWAS UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id_city' => '1221',
                'id_province' => '12',
                'name' => 'KABUPATEN PADANG LAWAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id_city' => '1222',
                'id_province' => '12',
                'name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id_city' => '1223',
                'id_province' => '12',
                'name' => 'KABUPATEN LABUHAN BATU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id_city' => '1224',
                'id_province' => '12',
                'name' => 'KABUPATEN NIAS UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id_city' => '1225',
                'id_province' => '12',
                'name' => 'KABUPATEN NIAS BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id_city' => '1271',
                'id_province' => '12',
                'name' => 'KOTA SIBOLGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id_city' => '1272',
                'id_province' => '12',
                'name' => 'KOTA TANJUNG BALAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id_city' => '1273',
                'id_province' => '12',
                'name' => 'KOTA PEMATANG SIANTAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id_city' => '1274',
                'id_province' => '12',
                'name' => 'KOTA TEBING TINGGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id_city' => '1275',
                'id_province' => '12',
                'name' => 'KOTA MEDAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id_city' => '1276',
                'id_province' => '12',
                'name' => 'KOTA BINJAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id_city' => '1277',
                'id_province' => '12',
                'name' => 'KOTA PADANGSid_cityIMPUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id_city' => '1278',
                'id_province' => '12',
                'name' => 'KOTA GUNUNGSITOLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id_city' => '1301',
                'id_province' => '13',
                'name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id_city' => '1302',
                'id_province' => '13',
                'name' => 'KABUPATEN PESISIR SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id_city' => '1303',
                'id_province' => '13',
                'name' => 'KABUPATEN SOLOK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id_city' => '1304',
                'id_province' => '13',
                'name' => 'KABUPATEN SIJUNJUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id_city' => '1305',
                'id_province' => '13',
                'name' => 'KABUPATEN TANAH DATAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id_city' => '1306',
                'id_province' => '13',
                'name' => 'KABUPATEN PADANG PARIAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id_city' => '1307',
                'id_province' => '13',
                'name' => 'KABUPATEN AGAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id_city' => '1308',
                'id_province' => '13',
                'name' => 'KABUPATEN LIMA PULUH KOTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id_city' => '1309',
                'id_province' => '13',
                'name' => 'KABUPATEN PASAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id_city' => '1310',
                'id_province' => '13',
                'name' => 'KABUPATEN SOLOK SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id_city' => '1311',
                'id_province' => '13',
                'name' => 'KABUPATEN DHARMASRAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id_city' => '1312',
                'id_province' => '13',
                'name' => 'KABUPATEN PASAMAN BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id_city' => '1371',
                'id_province' => '13',
                'name' => 'KOTA PADANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id_city' => '1372',
                'id_province' => '13',
                'name' => 'KOTA SOLOK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id_city' => '1373',
                'id_province' => '13',
                'name' => 'KOTA SAWAH LUNTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id_city' => '1374',
                'id_province' => '13',
                'name' => 'KOTA PADANG PANJANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id_city' => '1375',
                'id_province' => '13',
                'name' => 'KOTA BUKITTINGGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id_city' => '1376',
                'id_province' => '13',
                'name' => 'KOTA PAYAKUMBUH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id_city' => '1377',
                'id_province' => '13',
                'name' => 'KOTA PARIAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id_city' => '1401',
                'id_province' => '14',
                'name' => 'KABUPATEN KUANTAN SINGINGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id_city' => '1402',
                'id_province' => '14',
                'name' => 'KABUPATEN INDRAGIRI HULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id_city' => '1403',
                'id_province' => '14',
                'name' => 'KABUPATEN INDRAGIRI HILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id_city' => '1404',
                'id_province' => '14',
                'name' => 'KABUPATEN PELALAWAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id_city' => '1405',
                'id_province' => '14',
                'name' => 'KABUPATEN S I A K',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id_city' => '1406',
                'id_province' => '14',
                'name' => 'KABUPATEN KAMPAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id_city' => '1407',
                'id_province' => '14',
                'name' => 'KABUPATEN ROKAN HULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id_city' => '1408',
                'id_province' => '14',
                'name' => 'KABUPATEN BENGKALIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id_city' => '1409',
                'id_province' => '14',
                'name' => 'KABUPATEN ROKAN HILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id_city' => '1410',
                'id_province' => '14',
                'name' => 'KABUPATEN KEPULAUAN MERANTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id_city' => '1471',
                'id_province' => '14',
                'name' => 'KOTA PEKANBARU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id_city' => '1473',
                'id_province' => '14',
                'name' => 'KOTA D U M A I',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id_city' => '1501',
                'id_province' => '15',
                'name' => 'KABUPATEN KERINCI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id_city' => '1502',
                'id_province' => '15',
                'name' => 'KABUPATEN MERANGIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id_city' => '1503',
                'id_province' => '15',
                'name' => 'KABUPATEN SAROLANGUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id_city' => '1504',
                'id_province' => '15',
                'name' => 'KABUPATEN BATANG HARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id_city' => '1505',
                'id_province' => '15',
                'name' => 'KABUPATEN MUARO JAMBI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id_city' => '1506',
                'id_province' => '15',
                'name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id_city' => '1507',
                'id_province' => '15',
                'name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id_city' => '1508',
                'id_province' => '15',
                'name' => 'KABUPATEN TEBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id_city' => '1509',
                'id_province' => '15',
                'name' => 'KABUPATEN BUNGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id_city' => '1571',
                'id_province' => '15',
                'name' => 'KOTA JAMBI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id_city' => '1572',
                'id_province' => '15',
                'name' => 'KOTA SUNGAI PENUH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id_city' => '1601',
                'id_province' => '16',
                'name' => 'KABUPATEN OGAN KOMERING ULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id_city' => '1602',
                'id_province' => '16',
                'name' => 'KABUPATEN OGAN KOMERING ILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id_city' => '1603',
                'id_province' => '16',
                'name' => 'KABUPATEN MUARA ENIM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id_city' => '1604',
                'id_province' => '16',
                'name' => 'KABUPATEN LAHAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id_city' => '1605',
                'id_province' => '16',
                'name' => 'KABUPATEN MUSI RAWAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id_city' => '1606',
                'id_province' => '16',
                'name' => 'KABUPATEN MUSI BANYUASIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id_city' => '1607',
                'id_province' => '16',
                'name' => 'KABUPATEN BANYU ASIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id_city' => '1608',
                'id_province' => '16',
                'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id_city' => '1609',
                'id_province' => '16',
                'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id_city' => '1610',
                'id_province' => '16',
                'name' => 'KABUPATEN OGAN ILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id_city' => '1611',
                'id_province' => '16',
                'name' => 'KABUPATEN EMPAT LAWANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id_city' => '1612',
                'id_province' => '16',
                'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id_city' => '1613',
                'id_province' => '16',
                'name' => 'KABUPATEN MUSI RAWAS UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id_city' => '1671',
                'id_province' => '16',
                'name' => 'KOTA PALEMBANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id_city' => '1672',
                'id_province' => '16',
                'name' => 'KOTA PRABUMULIH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id_city' => '1673',
                'id_province' => '16',
                'name' => 'KOTA PAGAR ALAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id_city' => '1674',
                'id_province' => '16',
                'name' => 'KOTA LUBUKLINGGAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id_city' => '1701',
                'id_province' => '17',
                'name' => 'KABUPATEN BENGKULU SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id_city' => '1702',
                'id_province' => '17',
                'name' => 'KABUPATEN REJANG LEBONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id_city' => '1703',
                'id_province' => '17',
                'name' => 'KABUPATEN BENGKULU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id_city' => '1704',
                'id_province' => '17',
                'name' => 'KABUPATEN KAUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id_city' => '1705',
                'id_province' => '17',
                'name' => 'KABUPATEN SELUMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id_city' => '1706',
                'id_province' => '17',
                'name' => 'KABUPATEN MUKOMUKO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id_city' => '1707',
                'id_province' => '17',
                'name' => 'KABUPATEN LEBONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id_city' => '1708',
                'id_province' => '17',
                'name' => 'KABUPATEN KEPAHIANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id_city' => '1709',
                'id_province' => '17',
                'name' => 'KABUPATEN BENGKULU TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id_city' => '1771',
                'id_province' => '17',
                'name' => 'KOTA BENGKULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id_city' => '1801',
                'id_province' => '18',
                'name' => 'KABUPATEN LAMPUNG BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id_city' => '1802',
                'id_province' => '18',
                'name' => 'KABUPATEN TANGGAMUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id_city' => '1803',
                'id_province' => '18',
                'name' => 'KABUPATEN LAMPUNG SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id_city' => '1804',
                'id_province' => '18',
                'name' => 'KABUPATEN LAMPUNG TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id_city' => '1805',
                'id_province' => '18',
                'name' => 'KABUPATEN LAMPUNG TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id_city' => '1806',
                'id_province' => '18',
                'name' => 'KABUPATEN LAMPUNG UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id_city' => '1807',
                'id_province' => '18',
                'name' => 'KABUPATEN WAY KANAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id_city' => '1808',
                'id_province' => '18',
                'name' => 'KABUPATEN TULANGBAWANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id_city' => '1809',
                'id_province' => '18',
                'name' => 'KABUPATEN PESAWARAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id_city' => '1810',
                'id_province' => '18',
                'name' => 'KABUPATEN PRINGSEWU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id_city' => '1811',
                'id_province' => '18',
                'name' => 'KABUPATEN MESUJI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id_city' => '1812',
                'id_province' => '18',
                'name' => 'KABUPATEN TULANG BAWANG BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id_city' => '1813',
                'id_province' => '18',
                'name' => 'KABUPATEN PESISIR BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id_city' => '1871',
                'id_province' => '18',
                'name' => 'KOTA BANDAR LAMPUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id_city' => '1872',
                'id_province' => '18',
                'name' => 'KOTA METRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id_city' => '1901',
                'id_province' => '19',
                'name' => 'KABUPATEN BANGKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id_city' => '1902',
                'id_province' => '19',
                'name' => 'KABUPATEN BELITUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id_city' => '1903',
                'id_province' => '19',
                'name' => 'KABUPATEN BANGKA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id_city' => '1904',
                'id_province' => '19',
                'name' => 'KABUPATEN BANGKA TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id_city' => '1905',
                'id_province' => '19',
                'name' => 'KABUPATEN BANGKA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id_city' => '1906',
                'id_province' => '19',
                'name' => 'KABUPATEN BELITUNG TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id_city' => '1971',
                'id_province' => '19',
                'name' => 'KOTA PANGKAL PINANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id_city' => '2101',
                'id_province' => '21',
                'name' => 'KABUPATEN KARIMUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id_city' => '2102',
                'id_province' => '21',
                'name' => 'KABUPATEN BINTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id_city' => '2103',
                'id_province' => '21',
                'name' => 'KABUPATEN NATUNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id_city' => '2104',
                'id_province' => '21',
                'name' => 'KABUPATEN LINGGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id_city' => '2105',
                'id_province' => '21',
                'name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id_city' => '2171',
                'id_province' => '21',
                'name' => 'KOTA B A T A M',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id_city' => '2172',
                'id_province' => '21',
                'name' => 'KOTA TANJUNG PINANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id_city' => '3101',
                'id_province' => '31',
                'name' => 'KABUPATEN KEPULAUAN SERIBU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id_city' => '3171',
                'id_province' => '31',
                'name' => 'KOTA JAKARTA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id_city' => '3172',
                'id_province' => '31',
                'name' => 'KOTA JAKARTA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id_city' => '3173',
                'id_province' => '31',
                'name' => 'KOTA JAKARTA PUSAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id_city' => '3174',
                'id_province' => '31',
                'name' => 'KOTA JAKARTA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id_city' => '3175',
                'id_province' => '31',
                'name' => 'KOTA JAKARTA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id_city' => '3201',
                'id_province' => '32',
                'name' => 'KABUPATEN BOGOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id_city' => '3202',
                'id_province' => '32',
                'name' => 'KABUPATEN SUKABUMI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id_city' => '3203',
                'id_province' => '32',
                'name' => 'KABUPATEN CIANJUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id_city' => '3204',
                'id_province' => '32',
                'name' => 'KABUPATEN BANDUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id_city' => '3205',
                'id_province' => '32',
                'name' => 'KABUPATEN GARUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id_city' => '3206',
                'id_province' => '32',
                'name' => 'KABUPATEN TASIKMALAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id_city' => '3207',
                'id_province' => '32',
                'name' => 'KABUPATEN CIAMIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id_city' => '3208',
                'id_province' => '32',
                'name' => 'KABUPATEN KUNINGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id_city' => '3209',
                'id_province' => '32',
                'name' => 'KABUPATEN CIREBON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id_city' => '3210',
                'id_province' => '32',
                'name' => 'KABUPATEN MAJALENGKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id_city' => '3211',
                'id_province' => '32',
                'name' => 'KABUPATEN SUMEDANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id_city' => '3212',
                'id_province' => '32',
                'name' => 'KABUPATEN INDRAMAYU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id_city' => '3213',
                'id_province' => '32',
                'name' => 'KABUPATEN SUBANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id_city' => '3214',
                'id_province' => '32',
                'name' => 'KABUPATEN PURWAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id_city' => '3215',
                'id_province' => '32',
                'name' => 'KABUPATEN KARAWANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id_city' => '3216',
                'id_province' => '32',
                'name' => 'KABUPATEN BEKASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id_city' => '3217',
                'id_province' => '32',
                'name' => 'KABUPATEN BANDUNG BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id_city' => '3218',
                'id_province' => '32',
                'name' => 'KABUPATEN PANGANDARAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id_city' => '3271',
                'id_province' => '32',
                'name' => 'KOTA BOGOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id_city' => '3272',
                'id_province' => '32',
                'name' => 'KOTA SUKABUMI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id_city' => '3273',
                'id_province' => '32',
                'name' => 'KOTA BANDUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id_city' => '3274',
                'id_province' => '32',
                'name' => 'KOTA CIREBON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id_city' => '3275',
                'id_province' => '32',
                'name' => 'KOTA BEKASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id_city' => '3276',
                'id_province' => '32',
                'name' => 'KOTA DEPOK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id_city' => '3277',
                'id_province' => '32',
                'name' => 'KOTA CIMAHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id_city' => '3278',
                'id_province' => '32',
                'name' => 'KOTA TASIKMALAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id_city' => '3279',
                'id_province' => '32',
                'name' => 'KOTA BANJAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id_city' => '3301',
                'id_province' => '33',
                'name' => 'KABUPATEN CILACAP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id_city' => '3302',
                'id_province' => '33',
                'name' => 'KABUPATEN BANYUMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id_city' => '3303',
                'id_province' => '33',
                'name' => 'KABUPATEN PURBALINGGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id_city' => '3304',
                'id_province' => '33',
                'name' => 'KABUPATEN BANJARNEGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id_city' => '3305',
                'id_province' => '33',
                'name' => 'KABUPATEN KEBUMEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id_city' => '3306',
                'id_province' => '33',
                'name' => 'KABUPATEN PURWOREJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id_city' => '3307',
                'id_province' => '33',
                'name' => 'KABUPATEN WONOSOBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id_city' => '3308',
                'id_province' => '33',
                'name' => 'KABUPATEN MAGELANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id_city' => '3309',
                'id_province' => '33',
                'name' => 'KABUPATEN BOYOLALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id_city' => '3310',
                'id_province' => '33',
                'name' => 'KABUPATEN KLATEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id_city' => '3311',
                'id_province' => '33',
                'name' => 'KABUPATEN SUKOHARJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id_city' => '3312',
                'id_province' => '33',
                'name' => 'KABUPATEN WONOGIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id_city' => '3313',
                'id_province' => '33',
                'name' => 'KABUPATEN KARANGANYAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id_city' => '3314',
                'id_province' => '33',
                'name' => 'KABUPATEN SRAGEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id_city' => '3315',
                'id_province' => '33',
                'name' => 'KABUPATEN GROBOGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id_city' => '3316',
                'id_province' => '33',
                'name' => 'KABUPATEN BLORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id_city' => '3317',
                'id_province' => '33',
                'name' => 'KABUPATEN REMBANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id_city' => '3318',
                'id_province' => '33',
                'name' => 'KABUPATEN PATI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id_city' => '3319',
                'id_province' => '33',
                'name' => 'KABUPATEN KUDUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id_city' => '3320',
                'id_province' => '33',
                'name' => 'KABUPATEN JEPARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id_city' => '3321',
                'id_province' => '33',
                'name' => 'KABUPATEN DEMAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id_city' => '3322',
                'id_province' => '33',
                'name' => 'KABUPATEN SEMARANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id_city' => '3323',
                'id_province' => '33',
                'name' => 'KABUPATEN TEMANGGUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id_city' => '3324',
                'id_province' => '33',
                'name' => 'KABUPATEN KENDAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id_city' => '3325',
                'id_province' => '33',
                'name' => 'KABUPATEN BATANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id_city' => '3326',
                'id_province' => '33',
                'name' => 'KABUPATEN PEKALONGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id_city' => '3327',
                'id_province' => '33',
                'name' => 'KABUPATEN PEMALANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id_city' => '3328',
                'id_province' => '33',
                'name' => 'KABUPATEN TEGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id_city' => '3329',
                'id_province' => '33',
                'name' => 'KABUPATEN BREBES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id_city' => '3371',
                'id_province' => '33',
                'name' => 'KOTA MAGELANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id_city' => '3372',
                'id_province' => '33',
                'name' => 'KOTA SURAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id_city' => '3373',
                'id_province' => '33',
                'name' => 'KOTA SALATIGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id_city' => '3374',
                'id_province' => '33',
                'name' => 'KOTA SEMARANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id_city' => '3375',
                'id_province' => '33',
                'name' => 'KOTA PEKALONGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id_city' => '3376',
                'id_province' => '33',
                'name' => 'KOTA TEGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id_city' => '3401',
                'id_province' => '34',
                'name' => 'KABUPATEN KULON PROGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id_city' => '3402',
                'id_province' => '34',
                'name' => 'KABUPATEN BANTUL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id_city' => '3403',
                'id_province' => '34',
                'name' => 'KABUPATEN GUNUNG Kid_cityUL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id_city' => '3404',
                'id_province' => '34',
                'name' => 'KABUPATEN SLEMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id_city' => '3471',
                'id_province' => '34',
                'name' => 'KOTA YOGYAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id_city' => '3501',
                'id_province' => '35',
                'name' => 'KABUPATEN PACITAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id_city' => '3502',
                'id_province' => '35',
                'name' => 'KABUPATEN PONOROGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id_city' => '3503',
                'id_province' => '35',
                'name' => 'KABUPATEN TRENGGALEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id_city' => '3504',
                'id_province' => '35',
                'name' => 'KABUPATEN TULUNGAGUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id_city' => '3505',
                'id_province' => '35',
                'name' => 'KABUPATEN BLITAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id_city' => '3506',
                'id_province' => '35',
                'name' => 'KABUPATEN KEDIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id_city' => '3507',
                'id_province' => '35',
                'name' => 'KABUPATEN MALANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id_city' => '3508',
                'id_province' => '35',
                'name' => 'KABUPATEN LUMAJANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id_city' => '3509',
                'id_province' => '35',
                'name' => 'KABUPATEN JEMBER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id_city' => '3510',
                'id_province' => '35',
                'name' => 'KABUPATEN BANYUWANGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id_city' => '3511',
                'id_province' => '35',
                'name' => 'KABUPATEN BONDOWOSO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id_city' => '3512',
                'id_province' => '35',
                'name' => 'KABUPATEN SITUBONDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id_city' => '3513',
                'id_province' => '35',
                'name' => 'KABUPATEN PROBOLINGGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id_city' => '3514',
                'id_province' => '35',
                'name' => 'KABUPATEN PASURUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id_city' => '3515',
                'id_province' => '35',
                'name' => 'KABUPATEN Sid_cityOARJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id_city' => '3516',
                'id_province' => '35',
                'name' => 'KABUPATEN MOJOKERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id_city' => '3517',
                'id_province' => '35',
                'name' => 'KABUPATEN JOMBANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id_city' => '3518',
                'id_province' => '35',
                'name' => 'KABUPATEN NGANJUK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id_city' => '3519',
                'id_province' => '35',
                'name' => 'KABUPATEN MADIUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id_city' => '3520',
                'id_province' => '35',
                'name' => 'KABUPATEN MAGETAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id_city' => '3521',
                'id_province' => '35',
                'name' => 'KABUPATEN NGAWI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id_city' => '3522',
                'id_province' => '35',
                'name' => 'KABUPATEN BOJONEGORO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id_city' => '3523',
                'id_province' => '35',
                'name' => 'KABUPATEN TUBAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id_city' => '3524',
                'id_province' => '35',
                'name' => 'KABUPATEN LAMONGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id_city' => '3525',
                'id_province' => '35',
                'name' => 'KABUPATEN GRESIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id_city' => '3526',
                'id_province' => '35',
                'name' => 'KABUPATEN BANGKALAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id_city' => '3527',
                'id_province' => '35',
                'name' => 'KABUPATEN SAMPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id_city' => '3528',
                'id_province' => '35',
                'name' => 'KABUPATEN PAMEKASAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id_city' => '3529',
                'id_province' => '35',
                'name' => 'KABUPATEN SUMENEP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id_city' => '3571',
                'id_province' => '35',
                'name' => 'KOTA KEDIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id_city' => '3572',
                'id_province' => '35',
                'name' => 'KOTA BLITAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id_city' => '3573',
                'id_province' => '35',
                'name' => 'KOTA MALANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id_city' => '3574',
                'id_province' => '35',
                'name' => 'KOTA PROBOLINGGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id_city' => '3575',
                'id_province' => '35',
                'name' => 'KOTA PASURUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id_city' => '3576',
                'id_province' => '35',
                'name' => 'KOTA MOJOKERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id_city' => '3577',
                'id_province' => '35',
                'name' => 'KOTA MADIUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id_city' => '3578',
                'id_province' => '35',
                'name' => 'KOTA SURABAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id_city' => '3579',
                'id_province' => '35',
                'name' => 'KOTA BATU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id_city' => '3601',
                'id_province' => '36',
                'name' => 'KABUPATEN PANDEGLANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id_city' => '3602',
                'id_province' => '36',
                'name' => 'KABUPATEN LEBAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id_city' => '3603',
                'id_province' => '36',
                'name' => 'KABUPATEN TANGERANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id_city' => '3604',
                'id_province' => '36',
                'name' => 'KABUPATEN SERANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id_city' => '3671',
                'id_province' => '36',
                'name' => 'KOTA TANGERANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id_city' => '3672',
                'id_province' => '36',
                'name' => 'KOTA CILEGON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id_city' => '3673',
                'id_province' => '36',
                'name' => 'KOTA SERANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id_city' => '3674',
                'id_province' => '36',
                'name' => 'KOTA TANGERANG SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id_city' => '5101',
                'id_province' => '51',
                'name' => 'KABUPATEN JEMBRANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id_city' => '5102',
                'id_province' => '51',
                'name' => 'KABUPATEN TABANAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id_city' => '5103',
                'id_province' => '51',
                'name' => 'KABUPATEN BADUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id_city' => '5104',
                'id_province' => '51',
                'name' => 'KABUPATEN GIANYAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id_city' => '5105',
                'id_province' => '51',
                'name' => 'KABUPATEN KLUNGKUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id_city' => '5106',
                'id_province' => '51',
                'name' => 'KABUPATEN BANGLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id_city' => '5107',
                'id_province' => '51',
                'name' => 'KABUPATEN KARANG ASEM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id_city' => '5108',
                'id_province' => '51',
                'name' => 'KABUPATEN BULELENG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id_city' => '5171',
                'id_province' => '51',
                'name' => 'KOTA DENPASAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id_city' => '5201',
                'id_province' => '52',
                'name' => 'KABUPATEN LOMBOK BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id_city' => '5202',
                'id_province' => '52',
                'name' => 'KABUPATEN LOMBOK TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id_city' => '5203',
                'id_province' => '52',
                'name' => 'KABUPATEN LOMBOK TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id_city' => '5204',
                'id_province' => '52',
                'name' => 'KABUPATEN SUMBAWA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id_city' => '5205',
                'id_province' => '52',
                'name' => 'KABUPATEN DOMPU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id_city' => '5206',
                'id_province' => '52',
                'name' => 'KABUPATEN BIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id_city' => '5207',
                'id_province' => '52',
                'name' => 'KABUPATEN SUMBAWA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id_city' => '5208',
                'id_province' => '52',
                'name' => 'KABUPATEN LOMBOK UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id_city' => '5271',
                'id_province' => '52',
                'name' => 'KOTA MATARAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id_city' => '5272',
                'id_province' => '52',
                'name' => 'KOTA BIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id_city' => '5301',
                'id_province' => '53',
                'name' => 'KABUPATEN SUMBA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id_city' => '5302',
                'id_province' => '53',
                'name' => 'KABUPATEN SUMBA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id_city' => '5303',
                'id_province' => '53',
                'name' => 'KABUPATEN KUPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id_city' => '5304',
                'id_province' => '53',
                'name' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id_city' => '5305',
                'id_province' => '53',
                'name' => 'KABUPATEN TIMOR TENGAH UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id_city' => '5306',
                'id_province' => '53',
                'name' => 'KABUPATEN BELU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id_city' => '5307',
                'id_province' => '53',
                'name' => 'KABUPATEN ALOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id_city' => '5308',
                'id_province' => '53',
                'name' => 'KABUPATEN LEMBATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id_city' => '5309',
                'id_province' => '53',
                'name' => 'KABUPATEN FLORES TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id_city' => '5310',
                'id_province' => '53',
                'name' => 'KABUPATEN SIKKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id_city' => '5311',
                'id_province' => '53',
                'name' => 'KABUPATEN ENDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id_city' => '5312',
                'id_province' => '53',
                'name' => 'KABUPATEN NGADA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id_city' => '5313',
                'id_province' => '53',
                'name' => 'KABUPATEN MANGGARAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id_city' => '5314',
                'id_province' => '53',
                'name' => 'KABUPATEN ROTE NDAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id_city' => '5315',
                'id_province' => '53',
                'name' => 'KABUPATEN MANGGARAI BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id_city' => '5316',
                'id_province' => '53',
                'name' => 'KABUPATEN SUMBA TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id_city' => '5317',
                'id_province' => '53',
                'name' => 'KABUPATEN SUMBA BARAT DAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id_city' => '5318',
                'id_province' => '53',
                'name' => 'KABUPATEN NAGEKEO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id_city' => '5319',
                'id_province' => '53',
                'name' => 'KABUPATEN MANGGARAI TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id_city' => '5320',
                'id_province' => '53',
                'name' => 'KABUPATEN SABU RAIJUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id_city' => '5321',
                'id_province' => '53',
                'name' => 'KABUPATEN MALAKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id_city' => '5371',
                'id_province' => '53',
                'name' => 'KOTA KUPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id_city' => '6101',
                'id_province' => '61',
                'name' => 'KABUPATEN SAMBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id_city' => '6102',
                'id_province' => '61',
                'name' => 'KABUPATEN BENGKAYANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id_city' => '6103',
                'id_province' => '61',
                'name' => 'KABUPATEN LANDAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id_city' => '6104',
                'id_province' => '61',
                'name' => 'KABUPATEN MEMPAWAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id_city' => '6105',
                'id_province' => '61',
                'name' => 'KABUPATEN SANGGAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id_city' => '6106',
                'id_province' => '61',
                'name' => 'KABUPATEN KETAPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id_city' => '6107',
                'id_province' => '61',
                'name' => 'KABUPATEN SINTANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id_city' => '6108',
                'id_province' => '61',
                'name' => 'KABUPATEN KAPUAS HULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id_city' => '6109',
                'id_province' => '61',
                'name' => 'KABUPATEN SEKADAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id_city' => '6110',
                'id_province' => '61',
                'name' => 'KABUPATEN MELAWI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id_city' => '6111',
                'id_province' => '61',
                'name' => 'KABUPATEN KAYONG UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id_city' => '6112',
                'id_province' => '61',
                'name' => 'KABUPATEN KUBU RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id_city' => '6171',
                'id_province' => '61',
                'name' => 'KOTA PONTIANAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id_city' => '6172',
                'id_province' => '61',
                'name' => 'KOTA SINGKAWANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id_city' => '6201',
                'id_province' => '62',
                'name' => 'KABUPATEN KOTAWARINGIN BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id_city' => '6202',
                'id_province' => '62',
                'name' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id_city' => '6203',
                'id_province' => '62',
                'name' => 'KABUPATEN KAPUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id_city' => '6204',
                'id_province' => '62',
                'name' => 'KABUPATEN BARITO SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id_city' => '6205',
                'id_province' => '62',
                'name' => 'KABUPATEN BARITO UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id_city' => '6206',
                'id_province' => '62',
                'name' => 'KABUPATEN SUKAMARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id_city' => '6207',
                'id_province' => '62',
                'name' => 'KABUPATEN LAMANDAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id_city' => '6208',
                'id_province' => '62',
                'name' => 'KABUPATEN SERUYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id_city' => '6209',
                'id_province' => '62',
                'name' => 'KABUPATEN KATINGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id_city' => '6210',
                'id_province' => '62',
                'name' => 'KABUPATEN PULANG PISAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id_city' => '6211',
                'id_province' => '62',
                'name' => 'KABUPATEN GUNUNG MAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id_city' => '6212',
                'id_province' => '62',
                'name' => 'KABUPATEN BARITO TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id_city' => '6213',
                'id_province' => '62',
                'name' => 'KABUPATEN MURUNG RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id_city' => '6271',
                'id_province' => '62',
                'name' => 'KOTA PALANGKA RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id_city' => '6301',
                'id_province' => '63',
                'name' => 'KABUPATEN TANAH LAUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id_city' => '6302',
                'id_province' => '63',
                'name' => 'KABUPATEN KOTA BARU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id_city' => '6303',
                'id_province' => '63',
                'name' => 'KABUPATEN BANJAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id_city' => '6304',
                'id_province' => '63',
                'name' => 'KABUPATEN BARITO KUALA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id_city' => '6305',
                'id_province' => '63',
                'name' => 'KABUPATEN TAPIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id_city' => '6306',
                'id_province' => '63',
                'name' => 'KABUPATEN HULU SUNGAI SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id_city' => '6307',
                'id_province' => '63',
                'name' => 'KABUPATEN HULU SUNGAI TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id_city' => '6308',
                'id_province' => '63',
                'name' => 'KABUPATEN HULU SUNGAI UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id_city' => '6309',
                'id_province' => '63',
                'name' => 'KABUPATEN TABALONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id_city' => '6310',
                'id_province' => '63',
                'name' => 'KABUPATEN TANAH BUMBU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id_city' => '6311',
                'id_province' => '63',
                'name' => 'KABUPATEN BALANGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id_city' => '6371',
                'id_province' => '63',
                'name' => 'KOTA BANJARMASIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id_city' => '6372',
                'id_province' => '63',
                'name' => 'KOTA BANJAR BARU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id_city' => '6401',
                'id_province' => '64',
                'name' => 'KABUPATEN PASER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id_city' => '6402',
                'id_province' => '64',
                'name' => 'KABUPATEN KUTAI BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id_city' => '6403',
                'id_province' => '64',
                'name' => 'KABUPATEN KUTAI KARTANEGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id_city' => '6404',
                'id_province' => '64',
                'name' => 'KABUPATEN KUTAI TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id_city' => '6405',
                'id_province' => '64',
                'name' => 'KABUPATEN BERAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id_city' => '6409',
                'id_province' => '64',
                'name' => 'KABUPATEN PENAJAM PASER UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id_city' => '6411',
                'id_province' => '64',
                'name' => 'KABUPATEN MAHAKAM HULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id_city' => '6471',
                'id_province' => '64',
                'name' => 'KOTA BALIKPAPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id_city' => '6472',
                'id_province' => '64',
                'name' => 'KOTA SAMARINDA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id_city' => '6474',
                'id_province' => '64',
                'name' => 'KOTA BONTANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id_city' => '6501',
                'id_province' => '65',
                'name' => 'KABUPATEN MALINAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id_city' => '6502',
                'id_province' => '65',
                'name' => 'KABUPATEN BULUNGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id_city' => '6503',
                'id_province' => '65',
                'name' => 'KABUPATEN TANA Tid_cityUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id_city' => '6504',
                'id_province' => '65',
                'name' => 'KABUPATEN NUNUKAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id_city' => '6571',
                'id_province' => '65',
                'name' => 'KOTA TARAKAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id_city' => '7101',
                'id_province' => '71',
                'name' => 'KABUPATEN BOLAANG MONGONDOW',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id_city' => '7102',
                'id_province' => '71',
                'name' => 'KABUPATEN MINAHASA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id_city' => '7103',
                'id_province' => '71',
                'name' => 'KABUPATEN KEPULAUAN SANGIHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id_city' => '7104',
                'id_province' => '71',
                'name' => 'KABUPATEN KEPULAUAN TALAUD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id_city' => '7105',
                'id_province' => '71',
                'name' => 'KABUPATEN MINAHASA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id_city' => '7106',
                'id_province' => '71',
                'name' => 'KABUPATEN MINAHASA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id_city' => '7107',
                'id_province' => '71',
                'name' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id_city' => '7108',
                'id_province' => '71',
                'name' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id_city' => '7109',
                'id_province' => '71',
                'name' => 'KABUPATEN MINAHASA TENGGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id_city' => '7110',
                'id_province' => '71',
                'name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id_city' => '7111',
                'id_province' => '71',
                'name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id_city' => '7171',
                'id_province' => '71',
                'name' => 'KOTA MANADO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id_city' => '7172',
                'id_province' => '71',
                'name' => 'KOTA BITUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id_city' => '7173',
                'id_province' => '71',
                'name' => 'KOTA TOMOHON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id_city' => '7174',
                'id_province' => '71',
                'name' => 'KOTA KOTAMOBAGU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id_city' => '7201',
                'id_province' => '72',
                'name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id_city' => '7202',
                'id_province' => '72',
                'name' => 'KABUPATEN BANGGAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id_city' => '7203',
                'id_province' => '72',
                'name' => 'KABUPATEN MOROWALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id_city' => '7204',
                'id_province' => '72',
                'name' => 'KABUPATEN POSO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id_city' => '7205',
                'id_province' => '72',
                'name' => 'KABUPATEN DONGGALA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id_city' => '7206',
                'id_province' => '72',
                'name' => 'KABUPATEN TOLI-TOLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id_city' => '7207',
                'id_province' => '72',
                'name' => 'KABUPATEN BUOL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id_city' => '7208',
                'id_province' => '72',
                'name' => 'KABUPATEN PARIGI MOUTONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id_city' => '7209',
                'id_province' => '72',
                'name' => 'KABUPATEN TOJO UNA-UNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id_city' => '7210',
                'id_province' => '72',
                'name' => 'KABUPATEN SIGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id_city' => '7211',
                'id_province' => '72',
                'name' => 'KABUPATEN BANGGAI LAUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id_city' => '7212',
                'id_province' => '72',
                'name' => 'KABUPATEN MOROWALI UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id_city' => '7271',
                'id_province' => '72',
                'name' => 'KOTA PALU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id_city' => '7301',
                'id_province' => '73',
                'name' => 'KABUPATEN KEPULAUAN SELAYAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id_city' => '7302',
                'id_province' => '73',
                'name' => 'KABUPATEN BULUKUMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id_city' => '7303',
                'id_province' => '73',
                'name' => 'KABUPATEN BANTAENG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id_city' => '7304',
                'id_province' => '73',
                'name' => 'KABUPATEN JENEPONTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id_city' => '7305',
                'id_province' => '73',
                'name' => 'KABUPATEN TAKALAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id_city' => '7306',
                'id_province' => '73',
                'name' => 'KABUPATEN GOWA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id_city' => '7307',
                'id_province' => '73',
                'name' => 'KABUPATEN SINJAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id_city' => '7308',
                'id_province' => '73',
                'name' => 'KABUPATEN MAROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id_city' => '7309',
                'id_province' => '73',
                'name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id_city' => '7310',
                'id_province' => '73',
                'name' => 'KABUPATEN BARRU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id_city' => '7311',
                'id_province' => '73',
                'name' => 'KABUPATEN BONE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id_city' => '7312',
                'id_province' => '73',
                'name' => 'KABUPATEN SOPPENG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id_city' => '7313',
                'id_province' => '73',
                'name' => 'KABUPATEN WAJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id_city' => '7314',
                'id_province' => '73',
                'name' => 'KABUPATEN Sid_cityENRENG RAPPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id_city' => '7315',
                'id_province' => '73',
                'name' => 'KABUPATEN PINRANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id_city' => '7316',
                'id_province' => '73',
                'name' => 'KABUPATEN ENREKANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id_city' => '7317',
                'id_province' => '73',
                'name' => 'KABUPATEN LUWU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id_city' => '7318',
                'id_province' => '73',
                'name' => 'KABUPATEN TANA TORAJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id_city' => '7322',
                'id_province' => '73',
                'name' => 'KABUPATEN LUWU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id_city' => '7325',
                'id_province' => '73',
                'name' => 'KABUPATEN LUWU TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id_city' => '7326',
                'id_province' => '73',
                'name' => 'KABUPATEN TORAJA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id_city' => '7371',
                'id_province' => '73',
                'name' => 'KOTA MAKASSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id_city' => '7372',
                'id_province' => '73',
                'name' => 'KOTA PAREPARE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id_city' => '7373',
                'id_province' => '73',
                'name' => 'KOTA PALOPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id_city' => '7401',
                'id_province' => '74',
                'name' => 'KABUPATEN BUTON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id_city' => '7402',
                'id_province' => '74',
                'name' => 'KABUPATEN MUNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id_city' => '7403',
                'id_province' => '74',
                'name' => 'KABUPATEN KONAWE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id_city' => '7404',
                'id_province' => '74',
                'name' => 'KABUPATEN KOLAKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id_city' => '7405',
                'id_province' => '74',
                'name' => 'KABUPATEN KONAWE SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id_city' => '7406',
                'id_province' => '74',
                'name' => 'KABUPATEN BOMBANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id_city' => '7407',
                'id_province' => '74',
                'name' => 'KABUPATEN WAKATOBI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id_city' => '7408',
                'id_province' => '74',
                'name' => 'KABUPATEN KOLAKA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id_city' => '7409',
                'id_province' => '74',
                'name' => 'KABUPATEN BUTON UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id_city' => '7410',
                'id_province' => '74',
                'name' => 'KABUPATEN KONAWE UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id_city' => '7411',
                'id_province' => '74',
                'name' => 'KABUPATEN KOLAKA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id_city' => '7412',
                'id_province' => '74',
                'name' => 'KABUPATEN KONAWE KEPULAUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id_city' => '7413',
                'id_province' => '74',
                'name' => 'KABUPATEN MUNA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id_city' => '7414',
                'id_province' => '74',
                'name' => 'KABUPATEN BUTON TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id_city' => '7415',
                'id_province' => '74',
                'name' => 'KABUPATEN BUTON SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id_city' => '7471',
                'id_province' => '74',
                'name' => 'KOTA KENDARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id_city' => '7472',
                'id_province' => '74',
                'name' => 'KOTA BAUBAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id_city' => '7501',
                'id_province' => '75',
                'name' => 'KABUPATEN BOALEMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id_city' => '7502',
                'id_province' => '75',
                'name' => 'KABUPATEN GORONTALO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id_city' => '7503',
                'id_province' => '75',
                'name' => 'KABUPATEN POHUWATO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id_city' => '7504',
                'id_province' => '75',
                'name' => 'KABUPATEN BONE BOLANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id_city' => '7505',
                'id_province' => '75',
                'name' => 'KABUPATEN GORONTALO UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id_city' => '7571',
                'id_province' => '75',
                'name' => 'KOTA GORONTALO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id_city' => '7601',
                'id_province' => '76',
                'name' => 'KABUPATEN MAJENE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id_city' => '7602',
                'id_province' => '76',
                'name' => 'KABUPATEN POLEWALI MANDAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id_city' => '7603',
                'id_province' => '76',
                'name' => 'KABUPATEN MAMASA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id_city' => '7604',
                'id_province' => '76',
                'name' => 'KABUPATEN MAMUJU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id_city' => '7605',
                'id_province' => '76',
                'name' => 'KABUPATEN MAMUJU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id_city' => '7606',
                'id_province' => '76',
                'name' => 'KABUPATEN MAMUJU TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id_city' => '8101',
                'id_province' => '81',
                'name' => 'KABUPATEN MALUKU TENGGARA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id_city' => '8102',
                'id_province' => '81',
                'name' => 'KABUPATEN MALUKU TENGGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id_city' => '8103',
                'id_province' => '81',
                'name' => 'KABUPATEN MALUKU TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id_city' => '8104',
                'id_province' => '81',
                'name' => 'KABUPATEN BURU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id_city' => '8105',
                'id_province' => '81',
                'name' => 'KABUPATEN KEPULAUAN ARU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id_city' => '8106',
                'id_province' => '81',
                'name' => 'KABUPATEN SERAM BAGIAN BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id_city' => '8107',
                'id_province' => '81',
                'name' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id_city' => '8108',
                'id_province' => '81',
                'name' => 'KABUPATEN MALUKU BARAT DAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id_city' => '8109',
                'id_province' => '81',
                'name' => 'KABUPATEN BURU SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id_city' => '8171',
                'id_province' => '81',
                'name' => 'KOTA AMBON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id_city' => '8172',
                'id_province' => '81',
                'name' => 'KOTA TUAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id_city' => '8201',
                'id_province' => '82',
                'name' => 'KABUPATEN HALMAHERA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id_city' => '8202',
                'id_province' => '82',
                'name' => 'KABUPATEN HALMAHERA TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id_city' => '8203',
                'id_province' => '82',
                'name' => 'KABUPATEN KEPULAUAN SULA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id_city' => '8204',
                'id_province' => '82',
                'name' => 'KABUPATEN HALMAHERA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id_city' => '8205',
                'id_province' => '82',
                'name' => 'KABUPATEN HALMAHERA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id_city' => '8206',
                'id_province' => '82',
                'name' => 'KABUPATEN HALMAHERA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id_city' => '8207',
                'id_province' => '82',
                'name' => 'KABUPATEN PULAU MOROTAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id_city' => '8208',
                'id_province' => '82',
                'name' => 'KABUPATEN PULAU TALIABU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id_city' => '8271',
                'id_province' => '82',
                'name' => 'KOTA TERNATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id_city' => '8272',
                'id_province' => '82',
                'name' => 'KOTA Tid_cityORE KEPULAUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id_city' => '9101',
                'id_province' => '91',
                'name' => 'KABUPATEN FAKFAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id_city' => '9102',
                'id_province' => '91',
                'name' => 'KABUPATEN KAIMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id_city' => '9103',
                'id_province' => '91',
                'name' => 'KABUPATEN TELUK WONDAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id_city' => '9104',
                'id_province' => '91',
                'name' => 'KABUPATEN TELUK BINTUNI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id_city' => '9105',
                'id_province' => '91',
                'name' => 'KABUPATEN MANOKWARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id_city' => '9106',
                'id_province' => '91',
                'name' => 'KABUPATEN SORONG SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id_city' => '9107',
                'id_province' => '91',
                'name' => 'KABUPATEN SORONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id_city' => '9108',
                'id_province' => '91',
                'name' => 'KABUPATEN RAJA AMPAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id_city' => '9109',
                'id_province' => '91',
                'name' => 'KABUPATEN TAMBRAUW',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id_city' => '9110',
                'id_province' => '91',
                'name' => 'KABUPATEN MAYBRAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id_city' => '9111',
                'id_province' => '91',
                'name' => 'KABUPATEN MANOKWARI SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id_city' => '9112',
                'id_province' => '91',
                'name' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id_city' => '9171',
                'id_province' => '91',
                'name' => 'KOTA SORONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id_city' => '9401',
                'id_province' => '94',
                'name' => 'KABUPATEN MERAUKE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id_city' => '9402',
                'id_province' => '94',
                'name' => 'KABUPATEN JAYAWIJAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id_city' => '9403',
                'id_province' => '94',
                'name' => 'KABUPATEN JAYAPURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id_city' => '9404',
                'id_province' => '94',
                'name' => 'KABUPATEN NABIRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id_city' => '9408',
                'id_province' => '94',
                'name' => 'KABUPATEN KEPULAUAN YAPEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id_city' => '9409',
                'id_province' => '94',
                'name' => 'KABUPATEN BIAK NUMFOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id_city' => '9410',
                'id_province' => '94',
                'name' => 'KABUPATEN PANIAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id_city' => '9411',
                'id_province' => '94',
                'name' => 'KABUPATEN PUNCAK JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id_city' => '9412',
                'id_province' => '94',
                'name' => 'KABUPATEN MIMIKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id_city' => '9413',
                'id_province' => '94',
                'name' => 'KABUPATEN BOVEN DIGOEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id_city' => '9414',
                'id_province' => '94',
                'name' => 'KABUPATEN MAPPI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id_city' => '9415',
                'id_province' => '94',
                'name' => 'KABUPATEN ASMAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id_city' => '9416',
                'id_province' => '94',
                'name' => 'KABUPATEN YAHUKIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id_city' => '9417',
                'id_province' => '94',
                'name' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id_city' => '9418',
                'id_province' => '94',
                'name' => 'KABUPATEN TOLIKARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id_city' => '9419',
                'id_province' => '94',
                'name' => 'KABUPATEN SARMI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_city' => '9420',
                'id_province' => '94',
                'name' => 'KABUPATEN KEEROM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_city' => '9426',
                'id_province' => '94',
                'name' => 'KABUPATEN WAROPEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_city' => '9427',
                'id_province' => '94',
                'name' => 'KABUPATEN SUPIORI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_city' => '9428',
                'id_province' => '94',
                'name' => 'KABUPATEN MAMBERAMO RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_city' => '9429',
                'id_province' => '94',
                'name' => 'KABUPATEN NDUGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id_city' => '9430',
                'id_province' => '94',
                'name' => 'KABUPATEN LANNY JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id_city' => '9431',
                'id_province' => '94',
                'name' => 'KABUPATEN MAMBERAMO TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id_city' => '9432',
                'id_province' => '94',
                'name' => 'KABUPATEN YALIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id_city' => '9433',
                'id_province' => '94',
                'name' => 'KABUPATEN PUNCAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id_city' => '9434',
                'id_province' => '94',
                'name' => 'KABUPATEN DOGIYAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id_city' => '9435',
                'id_province' => '94',
                'name' => 'KABUPATEN INTAN JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id_city' => '9436',
                'id_province' => '94',
                'name' => 'KABUPATEN DEIYAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id_city' => '9471',
                'id_province' => '94',
                'name' => 'KOTA JAYAPURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
