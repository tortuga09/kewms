<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupPerihal extends Model
{
  protected $fillable = ['keterangan', 'jenis', 'kod'];
}
