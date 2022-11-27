<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['publisher_id' => 1,
            'title' => 'Funiculi Funicula',
            'author' => 'Toshikazu Kawaguchi',
            'year' => 2021,
            'synopsis' => 'Kafe tua yang berada di gang kecil Tokyo terletak di bawah gedung lain. Terkenal karena bisa membawa pengunjungnya menjelajahi waktu. Keajaiban kafe itu menarik seorang wanita yang ingin memutar waktu untuk berbaikan dengan kekasihnya.',
            'image' => 'https://cdn.gramedia.com/uploads/items/9786020651927_Funiculi_Funicula_cov.jpg'],
            ['publisher_id' => 2,
            'title' => 'The Trouble With Perfect',
            'author' => 'Helena Duggan',
            'year' => 2022,
            'synopsis' => 'Hal aneh terjadi di Kota Perfect—barang-barang dicuri, bahkan anak-anak pun menghilang. Semua orang menuduh bahwa Boy-lah pelakunya. Violet, sahabat Boy, tentu tidak percaya begitu saja. Akhirnya Violet pun berusaha mengungkap kebenaran di baliknya.',
            'image' => 'https://cdn.gramedia.com/uploads/items/9786230406799_Trouble_with_Perfect.jpg'],
            ['publisher_id' => 1,
            'title' => 'Midnight Sun',
            'author' => 'Stephenie Meyer',
            'year' => 2020,
            'synopsis' => 'Midnight Sun mengisahkan pertemuan Edward dan Bella serta menggambarkan bagaimana kisah cinta mereka terjalin dari sudut pandang Edward, sang vampir.',
            'image' => 'https://cdn.gramedia.com/uploads/items/9786020647890_Midnight_Sun_cov.jpg'],
            ['publisher_id' => 1,
            'title' => 'MetroPop: Under the Kitchen Table',
            'author' => 'Desy Miladiana',
            'year' => 2020,
            'synopsis' => 'Celebrity Chef, Sadewa Hartanto, memergoki istrinya berselingkuh di dapur apartemen mereka. Karena terikat kontrak pekerjaan, dia tidak bisa mengajukan perceraian. Dewa pun dianjurkan menyepi ke Bali untuk menenangkan diri di Sutar.',
            'image' => 'https://cdn.gramedia.com/uploads/items/UNDER_THE_KITCHEN_TABLE_1.jpg'],
            ['publisher_id' => 2,
            'title' => 'A Place Called Perfect',
            'author' => 'Helena Duggan',
            'year' => 2022,
            'synopsis' => '"Violet baru saja pindah ke kota baru yang bernama Perfect. Sama seperti namanya. Kota ini terlihat sempurna, kecuali satu hal. Semua penduduknya menjadi buta setelah tiba di kota ini dan membutuhkan kacamata khusus untuk dapat melihat lagi.',
            'image' => 'https://cdn.gramedia.com/uploads/items/9786230402005_A_Place_Called_Perfect.jpg']
        ]);
    }
}
