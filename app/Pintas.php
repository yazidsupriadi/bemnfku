<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pintas extends Model
{
    //
    protected $table = 'pintas';
    protected $fillable =['nama_mahasiswa','nim','angkatan','no_telpon','aduan'];

}
