<?php

use Illuminate\Database\Seeder;

class OrganisasisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('organisasis')->insert([
        'kod' => 'KEWMS',
        'nama_organisasi' => ' Nama Masjid Atau Surau',
        'alamat1' => 'Taman Pauh Damai',
        'poskod' => '12345',
        'bandar' => 'Bandar Pauh',
        'negeri' => 'Negeri Pauh',
      ]);
    }
}
