<?php

namespace App\Http\Controllers;
use App\Tanyaiptek;
use Illuminate\Http\Request;

class TanyaiptekController extends Controller
{
    //
    public function aduan(Request $request){
        $pintas = new Tanyaiptek;
        $pintas->nama_mahasiswa = $request->nama_mahasiswa;
        
        $pintas->nim = $request->nim;
        $pintas->angkatan = $request->angkatan;
        $pintas->no_telpon = $request->no_telpon;
        $pintas->aduan = $request->aduan;
        $pintas->save();
        return redirect('/ceritayuk');
    }
    public function index(){
        $pintass = Tanyaiptek::all();
        return view('admin-pages.tanyaiptek.index',compact('pintass'));
    }
    public function destroy($id)
    {
        //
        $items = Tanyaiptek::findOrFail($id);
        $items->delete();
        return redirect('/admin/tanyaiptek');
    
    }
}
