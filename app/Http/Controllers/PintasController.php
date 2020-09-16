<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pintas;
class PintasController extends Controller
{
    //
    public function aduan(Request $request){
        $pintas = new Pintas;
        $pintas->nama_mahasiswa = $request->nama_mahasiswa;
        
        $pintas->nim = $request->nim;
        $pintas->angkatan = $request->angkatan;
        $pintas->no_telpon = $request->no_telpon;
        $pintas->aduan = $request->aduan;
        $pintas->save();
        return redirect('/ceritayuk');
    }
    public function index(){
        $pintass = Pintas::all();
        return view('admin-pages.pintas.index',compact('pintass'));
    }
    public function destroy($id)
    {
        //
        $items = Pintas::findOrFail($id);
        $items->delete();
        return redirect('/admin/pintas');
    
    }
}
