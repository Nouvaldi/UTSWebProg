<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => 'Gramedia Pustaka Utama',
            'address' => 'Jl. Palmerah Barat 29-37 10270, RT.1/RW.2, Gelora, Tanah Abang, Central Jakarta City, Jakarta 10270',
            'phone' => '021-53650110',
            'email' => 'gramediapustakautama@gmail.com',
            'image' => 'https://octacintabuku.files.wordpress.com/2013/02/logo-gm.jpg'
        ]);

        DB::table('publishers')->insert([
            'name' => 'Bhuana Ilmu Populer',
            'address' => 'Jl. Gelora VII No.33, RT.1/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
            'phone' => '021-53677834',
            'email' => 'bhuanailmupopuler@gmail.com',
            'image' => 'https://mizanstore.com/assets/img/vendor/Logo-BHUANA-ILMU-POPULER-313.jpg'
        ]);
    }
}
