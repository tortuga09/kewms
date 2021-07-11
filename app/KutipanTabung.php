<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KutipanTabung extends Model
{
  protected $fillable = [
    'tarikh_kutipan', 'rm100', 'jum_rm100', 'rm50', 'jum_rm50', 'rm20', 'jum_rm20','rm10', 'jum_rm10', 'rm5', 'jum_rm5', 'rm1', 'jum_rm1', 'rm05', 'jum_rm05', 'rm02', 'jum_rm02', 'rm01', 'jum_rm01', 'rm005', 'jum_rm005', 'jumlah_keping', 'jumlah_besar', 'pegawai_1', 'pegawai_2', 'pegawai_3'
  ];
}
