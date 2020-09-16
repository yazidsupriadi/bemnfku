<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanyaiptek extends Model
{ 
    //
    protected $table = 'tanyaiptek';
    protected $fillable =['nama_mahasiswa','nim','angkatan','no_telpon','aduan'];

}
