<?php

use Illuminate\Database\Seeder;

class mobilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('mobil')->insert(array(['nama_mobil' => 'jazz', 'merek' => 'anjink', 'id_kategori'=>'1','Harga' => '5000000', 'Tahun' => '2018', ] )); 
    }
}
