<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
  protected $fillable = [
    'no_rujukan', 'nama_aset', 'model', 'pembekal', 'tarikh_beli', 'harga', 'lokasi', 'kategori', 'tahun_beli', 'status'
  ];
}
