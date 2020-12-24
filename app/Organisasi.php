<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
  protected $fillable = [
    'kod', 'nama_organisasi', 'alamat1', 'alamat2', 'alamat3', 'poskod', 'bandar', 'negeri', 'telefon', 'email'
  ];
}
