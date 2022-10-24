@extends('admin.app')
@section('title','EditSiswa')
@section('content-title','EditSiswa')
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
                <form method="POST" enctype="multipart/form-data"action="{{route ('siswa.update',['siswa'=>$siswa->id]) }}">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name='nama' value="{{$siswa->nama}}" required>
                    </div>
                
                    <div class="form-group">
                        <label for="Nama">Jenis Kelamin</label>
                        <select type="text" class="form-control" id="jk" name='jk' value="{{$siswa->jk}}" required>
                        <option value='laki laki' @if($siswa->jk == 'laki-laki') selected @endif> Laki-Laki</option>
                        <option value='perempuan' @if($siswa->jk == 'perempuan') selected @endif>Perempuan</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="Nama">Email</label>
                        <input type="text" class="form-control" id="email" name='email' value="{{$siswa->email}}" required>
                    </div>
        
                
                    <div class="form-group">
                        <label for="Nama">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name='alamat' value="{{$siswa->alamat}}" required>
                    </div>
           
                    <div class="form-group">
                        <label for="Nama">About</label>
                        <textarea type="text" class="form-control" id="about" name='about'>{{$siswa->about}}</textarea >
                        
                    <div class="form-group">
                        <label for="Nama">Foto Siswa</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                        <img src="{{asset('/template/img/'.$siswa->foto)}}" width="300" class="img-thumbnail" >
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