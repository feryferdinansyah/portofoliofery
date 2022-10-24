@extends('admin.app')
@section('title','TambahSiswa')
@section('content-title','TambahSiswa')
@section('content')
<div class="row">
        <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                @if (count($errors)> 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <form method="POST" enctype="multipart/form-data"action="/siswa">
                    @csrf
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name='nama' value="{{old('nama')}}" >
                    </div>
                
                    <div class="form-group">
                        <label for="Nama">Jenis Kelamin</label>
                        <select type="text" class="form-control" id="jk" name='jk' value="{{old('jk')}}" >
                        <option value='laki laki'>Laki-Laki</option>
                        <option value='perempuan'>Perempuan</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="Nama">Email</label>
                        <input type="text" class="form-control" id="email" name='email' value="{{old('email')}}" >
                    </div>
        
                
                    <div class="form-group">
                        <label for="Nama">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name='alamat' value="{{old('alamat')}}" >
                    </div>
           
                    <div class="form-group">
                        <label for="Nama">About</label>
                        <textarea type="text" class="form-control" id="about" name='about'></textarea>
                        
                    <div class="form-group">
                        <label for="Nama">Foto Siswa</label>
                        <input type="file" class="form-control-file" id="foto" name='foto'>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('siswa.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                    </div>
                </form>
                </div>
             </div>
        </div>
    </div>

@endsection