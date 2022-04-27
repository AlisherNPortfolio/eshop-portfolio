<?php

namespace App\Modules\Setting\database\seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            [
                'name' => 'Andijon tum.',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Asaka',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Baliqchi',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Bo\'ston',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Buloqboshi',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Izboskan',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Jalolquduq',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Xo\'jaobod',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Qo\'rg\'ontepa',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Marhamat',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Oltinko\'l',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Paxtaobod',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Shahrixon',
                'region_id' => 2,
                'status' => true
            ],
            [
                'name' => 'Ulug\'nor',
                'region_id' => 2,
                'status' => true
            ],
            // buxoro
            [
                'name' => 'Olot',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'Buxoro tum.',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'G\'ijduvon',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'Jondor',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'Kogon',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'Qorako\'l',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'Qorovulbozor',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'Peshko\'',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'Romitan',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'Shofirkon',
                'region_id' => 3,
                'status' => true
            ],
            [
                'name' => 'Vobkent',
                'region_id' => 3,
                'status' => true
            ],
            // farg'ona
            [
                'name' => 'Oltiariq',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Bag\'dod',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Beshariq',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Buvayda',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Dang\'ara',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Dang\'ara',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Farg\'ona tum.',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Furqat',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Qo\'shtepa',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Quva',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Rishton',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'So\'x',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Toshloq',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Uchko\'prik',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'O\'zbekiston',
                'region_id' => 4,
                'status' => true
            ],
            [
                'name' => 'Yozyovon',
                'region_id' => 4,
                'status' => true
            ],
            // Jizzax
            [
                'name' => 'Arnasoy',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Baxmal',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Do\'stlik',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Forish',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'G\'allaorol',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Sharof Rashidov',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Mirzacho\'l',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Paxtakor',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Yangiobod',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Zomin',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Zafarobod',
                'region_id' => 5,
                'status' => true
            ],
            [
                'name' => 'Zarbdor',
                'region_id' => 5,
                'status' => true
            ],
            // xorazm
            [
                'name' => 'Bog\'ot',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Gurlan',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Xonqa',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Hazorasp',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Xiva',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Qo\'shko\'pir',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Shovot',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Urganch',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Yangiariq',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Yangibozor',
                'region_id' => 6,
                'status' => true
            ],
            [
                'name' => 'Tuproqqal\'a',
                'region_id' => 6,
                'status' => true
            ],
            // namangan
            [
                'name' => 'Chortoq',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Chust',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Kosonsoy',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Mingbuloq',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Namangan tum.',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Norin',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Pop',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'To\'raqo\'rg\'on',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Uchqo\'rg\'on',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Uychi',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Yangiqo\'rg\'on',
                'region_id' => 7,
                'status' => true
            ],
            [
                'name' => 'Davlatobod',
                'region_id' => 7,
                'status' => true
            ],
            // navoiy
            [
                'name' => 'Konimex',
                'region_id' => 8,
                'status' => true
            ],
            [
                'name' => 'Karmana',
                'region_id' => 8,
                'status' => true
            ],
            [
                'name' => 'Qiziltepa',
                'region_id' => 8,
                'status' => true
            ],
            [
                'name' => 'Xatirchi',
                'region_id' => 8,
                'status' => true
            ],
            [
                'name' => 'Navbahor',
                'region_id' => 8,
                'status' => true
            ],
            [
                'name' => 'Nurota',
                'region_id' => 8,
                'status' => true
            ],
            [
                'name' => 'Tomdi',
                'region_id' => 8,
                'status' => true
            ],
            [
                'name' => 'Uchquduq',
                'region_id' => 8,
                'status' => true
            ],
            //
            [
                'name' => 'Qarshi sh',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'G\'uzor',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Dehqonobod',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Qamashi',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Qarshi',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Kasbi',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Kitob',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Koson',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Mirishkor',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Muborak',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Nishon',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Shahrisabz sh',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Shahrisabz tum.',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Chiroqchi',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Yakkabog\'',
                'region_id' => 9,
                'status' => true
            ],
            [
                'name' => 'Ko\'kdala',
                'region_id' => 9,
                'status' => true
            ],
            //
            [
                'name' => 'Amudaryo',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Beruniy',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Chimboy',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Ellikqal\'a',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Kegeyli',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Mo\'ynoq',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Nukus',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Qonliko\'l',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Qo\'ng\'irot',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Qorao\'zak',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Shumanay',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Taxtako\'pir',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'To\'rtko\'l',
                'region_id' => 10,
                'status' => true
            ],
            [
                'name' => 'Xo\'jayli',
                'region_id' => 10,
                'status' => true
            ],
            //
            [
                'name' => 'Bulung\'ur',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Ishtixon',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Jomboy',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Kattaqo\'rg\'on',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Qo\'shrabot',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Narpay',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Nurobod',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Oqdaryo',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Paxtachi',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Payariq',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Pastdarg\'om',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Samarqand tum.',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Toyloq',
                'region_id' => 11,
                'status' => true
            ],
            [
                'name' => 'Urgut',
                'region_id' => 11,
                'status' => true
            ],
            //
            [
                'name' => 'Oqoltin',
                'region_id' => 12,
                'status' => true
            ],
            [
                'name' => 'Boyovut',
                'region_id' => 12,
                'status' => true
            ],
            [
                'name' => 'Guliston',
                'region_id' => 12,
                'status' => true
            ],
            [
                'name' => 'Xovos',
                'region_id' => 12,
                'status' => true
            ],
            [
                'name' => 'Mirzaobod',
                'region_id' => 12,
                'status' => true
            ],
            [
                'name' => 'Sardoba',
                'region_id' => 12,
                'status' => true
            ],
            [
                'name' => 'Sayxunobod',
                'region_id' => 12,
                'status' => true
            ],
            [
                'name' => 'Sirdaryo tum.',
                'region_id' => 12,
                'status' => true
            ],
            //
            [
                'name' => 'Angor',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Boysun',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Denov',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Jarqo\'rg\'on',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Qiziriq',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Qumqo\'rg\'on',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Muzrabot',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Oltinsoy',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Sariosiyo',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Sherobod',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Sho\'rchi',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Termiz',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Uzun',
                'region_id' => 13,
                'status' => true
            ],
            [
                'name' => 'Bandixon',
                'region_id' => 13,
                'status' => true
            ],
            //
            [
                'name' => 'Bekobod',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Bo\'stonliq',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Bo\'ka',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Chinoz',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Qibray',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Ohangaron',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Oqqo\'rg\'on',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Parkent',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Piskent',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Quyichirchiq',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'O\'rtachirchiq',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Yangiyo\'l',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Yuqorichirchiq',
                'region_id' => 14,
                'status' => true
            ],
            [
                'name' => 'Zangiota',
                'region_id' => 14,
                'status' => true
            ],
            //
            [
                'name' => 'Bektemir',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Chilonzor',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Yashnobod',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Mirobod',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Mirzo Ulug\'bek',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Sirg\'ali',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Shayxontohur',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Olmazor',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Uchtepa',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Yakkasaroy',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Yunusobod',
                'region_id' => 1,
                'status' => true
            ],
            [
                'name' => 'Yangihayot',
                'region_id' => 1,
                'status' => true
            ],
        ];

        foreach ($districts as $district) {
            District::create($district);
        }
    }
}
