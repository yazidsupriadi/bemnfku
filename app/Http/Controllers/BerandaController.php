<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabar;
class BerandaController extends Controller
{
    //
    public function beranda()
    {
        return view('frontend/beranda');
    }

    public function tentangkita()
    {
        return view('frontend/tentangkita');
    }
    
    public function ceritayuk()
    {
        return view('frontend/ceritayuk');
    }

    public function kabar()
    {
        $kabars = Kabar::all();
        return view('frontend/kabar',compact('kabars'));
    }
    public function kabarnews()
    {
        return view('frontend/kabarnews');
    }
   
}
