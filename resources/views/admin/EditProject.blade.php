@extends('admin.app')
@section('title','Edit Projects')
@section('content-title','Edit Projects')
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
                <form method="POST" enctype="multipart/form-data"action="{{route ('projects.update',['project'=>$projects->id]) }}">
                    @csrf
                    {{method_field('PUT')}}
                     <div class="form-group d-none">
                        <label for="Nama">id_siswa </label>
                        <input type="hidden" name="id_siswa" value="{{$projects->id_siswa}}">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_project">nama_project</label>
                        <input type="text" class="form-control" id="nama_project" name='nama_project' value="{{$projects->nama_project}}" required>
                    </div>
                
                   
                
                    <div class="form-group">
                        <label for="tanggal">tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name='tanggal' value="{{$projects->tanggal}}" required>
                    </div>
        
                    <div class="form-group">
                        <label for="deskripsi">deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name='deskripsi'>{{$projects->deskripsi}}</textarea >
                        
                    <div class="form-group">
                        <label for="foto">Foto projects</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                        <img src="{{asset('/template/img/'.$projects->foto)}}" width="300" class="img-thumbnail" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('projects.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                    </div>
                </form>
                </div>
             </div>
        </div>
    </div>
@endsection