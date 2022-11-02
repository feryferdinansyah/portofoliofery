<?php

namespace App\Http\Controllers;

use App\Models\Jeniskontak;
use App\Models\Siswa;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jeniskontak::all();
        $siswa = Siswa::all();
        return view('admin.jnsKontak', compact('data','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createjnsKontak');
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
            "tipe_kontak" => "required"
        ],$message);
        Jeniskontak::create($validated);
        return redirect()->route('jnskontak.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Jeniskontak::find($id);
        return view('admin.editjnsKontak', compact('data'));
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
            'tipe_kontak'=>'required',
        ],$message);

        $jenis = Jeniskontak::find($id);
        $jenis->tipe_kontak = $request->tipe_kontak;
        $jenis->update();
        return redirect('/jnskontak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jeniskontak::find($id)->delete();
        return redirect('/jnskontak');
    }
}
