<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use App\Models\Siswa;
use File;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('/admin.projects' ,  compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $siswa = Siswa::find($id);
        return view ('admin.TambahProject',compact('siswa'));
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
            'id_siswa' => 'required',
            'nama_project' => 'required',
            'tanggal' => 'required',
            'deskripsi'=> 'required|min:5',
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
        Projek::create([
            'id_siswa' => $request->id_siswa,
            'nama_project' => $request->nama_project,
            'tanggal' => $request->tanggal,
            'deskripsi'=> $request->deskripsi,
            'foto' => $nama_file
        ]);

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.ShowProject' ,[
            "data" => Siswa::find($id)->projek()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('admin.EditProject',[
            'projects' => Projek::find($id)
        
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
            'id_siswa' => 'required',
            'nama_project' => 'required',
            'tanggal' => 'required',
            'deskripsi'=> 'required|min:5',
            'foto' => 'mimes:jpg,jpeg,png,svg,gif'
            
        ],$messages);

        if($request->foto !=''){
            //Dengan Ganti Foto
            //1.Hapus foto yang lama
            $projek=Projek::find($id);
            file::delete('./template/img/'.$projek->foto);
            //2.ambil informasi file yang diupload
        $file = $request->file('foto');

        //3.rename + ambil nama file
        $nama_file = time()."_".$file->getClientOriginalName();

        //proses upload
        $tujuan_upload = './template/img/';
        $file->move($tujuan_upload,$nama_file);
        //5.menyimpan ke database
        $projek=Projek::find($id);
        $projek->id_siswa=$request->id_siswa;
        $projek->nama_project=$request->nama_project;
        $projek->tanggal=$request->tanggal;
        $projek->deskripsi=$request->deskripsi;
        $projek->foto=$nama_file;
        $projek->save();
        return redirect('projects');

        }else {
            $projek=Projek::find($id);
            $projek->id_siswa=$request->id_siswa;
            $projek->nama_project=$request->nama_project;
            $projek->tanggal=$request->tanggal;
            $projek->deskripsi=$request->deskripsi;
            $projek->save();
            return redirect('/projects');
            
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
        $projek=Projek::find($id);
        $projek->delete();
        return redirect('/projects');

    }
}
