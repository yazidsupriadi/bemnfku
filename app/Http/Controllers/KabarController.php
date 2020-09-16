<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabar;
class KabarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kabars = Kabar::all();
        return view('admin-pages.kabar.index',compact('kabars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        return view('admin-pages.kabar.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $kabar = new Kabar;
        $kabar->Judul = $request->Judul;
        $kabar->tipe_kabar = $request->tipe_kabar;
        $kabar->isi_kabar = $request->isi_kabar;
        $kabar->foto_headline = $request->file('foto_headline')->store(
            'backend/img','public'
        );
        $kabar->save();
     return redirect('/admin/kabar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item =  Kabar::findOrFail($id);
        return view('admin-pages.kabar.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = Kabar::find($id);
        return view('admin-pages.kabar.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $data = $request->all();
        $data['foto_headline'] = $request->file('foto_headline')->store(
            'backend/img','public'
        );
        $item = Kabar::findOrFail($id);
        $item->update($data);
        return  redirect('/admin/kabar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $items = Kabar::findOrFail($id);
        $items->delete();
        return redirect('/admin/kabar');
    }
}
