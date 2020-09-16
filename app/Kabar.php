<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabar extends Model
{
    //
    
    protected $table = 'kabar';
    protected $fillable =['judul','tipe_kabar','isi_kabar','foto_headline'];
    
    public $timestamps = true;
}
