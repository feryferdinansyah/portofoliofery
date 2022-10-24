<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use File;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use SebastianBergmann\Template\Template;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();
        return view('/admin.siswa' , compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/admin.TambahSiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages=[
            'required' => ':attribute harus diisi dulu',
            'min' => ':attribute minimal :min karakter cuy',
            'max' => ':attribute maksimal :max karakter cuy',
            'numeric' => ':attribute harus diisi angka cuy',
            'mimes' => ':attribute harus bertipe jpg,jpeg,png,svg,gif',
            'size' => 'file yang di upload maksimal :size'
        ];
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'jk' => 'required',
            'email' => 'required',
            'alamat'=> 'required|min:5',
            'about'=> 'required|min:50',
            'foto' => 'required|mimes:jpg,jpeg,png,svg,gif'
        ],$messages);

        //ambil informasi file yang diupload
        $file = $request->file('foto');

        //rename + ambil nama file
        $nama_file = time()."_".$file->getClientOriginalName();

        //proses upload
        $tujuan_upload = './template/img';
        $file->move($tujuan_upload,$nama_file);

        //proses insert Database
        Siswa::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'email' => $request->email,
            'alamat'=> $request->alamat,
            'about'=> $request->about,
            'foto' => $nama_file
        ]);

        return redirect('/siswa');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        $kontak = $siswa->kontak;
        return view ('admin.ShowSiswa',compact('siswa','kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view ('admin.EditSiswa', [
            'siswa' => Siswa::find($id)

        ]);
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
        $messages=[
            'required' => ':attribute harus diisi dulu',
            'min' => ':attribute minimal :min karakter cuy',
            'max' => ':attribute maksimal :max  karakter cuy',
            'numeric' => ':attribute harus diisi angka cuy',
            'mimes' => ':attribute harus bertipe jpg,jpeg,png,svg,gif',
            'size' => 'file yang di upload maksimal :size'
        ];
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'jk' => 'required',
            'email' => 'required',
            'alamat'=> 'required|min:5',
            'about'=> 'required|min:50',
            'foto' => 'mimes:jpg,jpeg,png,svg,gif'
            
        ],$messages);

        if($request->foto !=''){
            //Dengan Ganti Foto
            //1.Hapus foto yang lama
            $siswa=Siswa::find($id);
            file::delete('./template/img/'.$siswa->foto);
            //2.ambil informasi file yang diupload
        $file = $request->file('foto');

        //3.rename + ambil nama file
        $nama_file = time()."_".$file->getClientOriginalName();

        //proses upload
        $tujuan_upload = './template/img/';
        $file->move($tujuan_upload,$nama_file);
        //5.menyimpan ke database
        $siswa=Siswa::find($id);
        $siswa->jk=$request->jk;
        $siswa->nama=$request->nama;
        $siswa->email=$request->email;
        $siswa->alamat=$request->alamat;
        $siswa->about=$request->about;
        $siswa->foto=$nama_file;
        $siswa->save();
        return redirect('siswa');

        }else {
            $siswa=Siswa::find($id);
            $siswa->nama=$request->nama;
            $siswa->jk=$request->jk;
            $siswa->email=$request->email;
            $siswa->alamat=$request->alamat;
            $siswa->about=$request->about;
            $siswa->save();
            return redirect('siswa');
            
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $siwsa=Siswa::find($id)->delete();
        return redirect('siswa');
    }

    public function Hapus($id)
    {
        $siwsa=Siswa::find($id)->delete();
        return redirect('siswa');
    }
}
