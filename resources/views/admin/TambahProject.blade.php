@extends('admin.app')
@section('title','Tambah Projects')
@section('content-title','Tambah Projects- ' . ($siswa->nama))
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
                <form method="POST" enctype="multipart/form-data" action="{{ route('projects.store') }}">
                    @csrf
                    {{-- <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name='nama' value="{{old('nama')}}" required>
                    </div> --}}
                
                    <div class="form-group">
                       <input type="hidden" name="id_siswa" value="{{$siswa->id}}">
                    </div>
                
                    <div class="form-group">
                        <label for="Nama">nama_projects</label>
                        <input type="text" class="form-control" id="nama_projects" name='nama_project' value="{{old('nama_projects')}}" required>
                    </div>
        
                
                    <div class="form-group">
                        <label for="Nama">tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name='tanggal' value="{{old('tanggal')}}" required>
                    </div>
           
                    <div class="form-group">
                        <label for="Nama">deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name='deskripsi'></textarea>
                        
                    <div class="form-group">
                        <label for="Nama">Foto</label>
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