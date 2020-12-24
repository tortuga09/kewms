<?php

use Illuminate\Database\Seeder;

class LookupPerihalTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Baki b/b',
      'jenis' => 'Terimaan',
      'kod' => 1
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Baki h/b',
      'jenis' => 'Perbelanjaan',
      'kod' => 2
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Derma/Sumbangan',
      'jenis' => 'Terimaan',
      'kod' => 1
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Sewa',
      'jenis' => 'Terimaan',
      'kod' => 1
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Pelbagai',
      'jenis' => 'Terimaan',
      'kod' => 1
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Utiliti',
      'jenis' => 'Perbelanjaan',
      'kod' => 2
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Jamuan',
      'jenis' => 'Perbelanjaan',
      'kod' => 2
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Saguhati',
      'jenis' => 'Perbelanjaan',
      'kod' => 2
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Elaun AJK',
      'jenis' => 'Perbelanjaan',
      'kod' => 2
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Selenggara',
      'jenis' => 'Perbelanjaan',
      'kod' => 2
    ]);

    DB::table('lookup_perihals')->insert([
      'keterangan' => 'Belanja Am',
      'jenis' => 'Perbelanjaan',
      'kod' => 2
    ]);
  }
}
