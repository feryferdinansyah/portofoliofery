<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Siswa;
use App\Models\Jeniskontak;
use Illuminate\Http\Request;
use File;
// use App/Models/Siswa;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('/admin.kontak' ,  compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.TambahKontak", [
            'siswa' => siswa::all(),
            'jenis' => Jeniskontak::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute harus diisi dulu bang'
        ];
        $validated = $request->validate([
            "id_siswa" => "required",
            "id_jenis" => "required",
            "deskripsi" => "required",
        ],$message);
        Kontak::create($validated);
        return redirect()->route('kontak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('admin.ShowKontak');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kontak::find($id);
        $jenis_kontak = Jeniskontak::find($id);
        return view ('admin.EditKontak', compact('data','jenis_kontak'));
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
        $message = [
            'required' => ':attribute harus diisi dulu bang'
        ];
        
        $this->validate($request,[
            
            'id_siswa'=>'required',
            'tipe_kontak'=>'required',
            'deskripsi'=>'required',
        ],$message);

        $kontak = Kontak::find($id);
        $kontak->tipe_kontak = $request->tipe_kontak;
        $kontak->id_siswa = $request->id_siswa;
        $kontak->deskripsi = $request->deskripsi;
        $kontak->update();
        return redirect('/kontak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kontak::find($id)->delete();
        return redirect()->back();
    }
}
