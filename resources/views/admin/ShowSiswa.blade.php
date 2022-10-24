@extends('admin.app')
@section('title','ShowSiswa')
@section('content-title','ShowSiswa')
@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-2">
            <div class="card-body text-center">
                <!-- <img src="{{asset('/template/img'.$siswa->foto)}}" width="200" class="rounded-circle img-thumbnail"> -->
                <img src="{{asset('/template/img/'.$siswa->foto)}}" width="300" class="rounded-circle img-thumbnail">
                <div class="mt-3"></div>
                <h5 class=" fas fa-signature">{{$siswa->nama}}</h5>
                <div class="mt-2"></div>
                <h5 class=" fas fa-american-sign-language-interpreting">{{$siswa->jk}}</h5>
                <div class="mt-1"></div>
                <h5 class=" fas fa-envelope">{{$siswa->email}}</h5>
                <div class="mt-1"></div>
                <h5 class=" fas fa-city">{{$siswa->alamat}}</h5>

            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card header py-3 flex flex-row align-item-center justify-content-between">
            <h6 class="font-weight-bold text primary"><i class="fas fa-user-plus ml-2"></i>Kontak siswa</h6>
            </div>
            <div class="card-body">
            @foreach ($kontak as $k)
                <a href="{{ $k->deskripsi }}" target="_blank">{{ $k->jeniskontak->tipe_kontak }}</a>
            @endforeach
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card shadow mb-4">
        <div class="card-header py-3 flex flex-row align-item-center justify-content-between">
            <h6 class=" m-0 font-weight-bold text primary"><i class="fas fa-user-left"></i>About Siswa</h6>
            </div>
            <div class="card-body">
                <blockquote class="blockqoute text-center">
                    <p class="mb-0">{{$siswa->about}}</p>
                </blockquote>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 flex flex-row align-item-center justify-content-between">
            <h6 class=" m-0 font-weight-bold text primary"><i class="fas fa-user-left"></i>Project Siswa</h6>   
                 </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
    
    
</div>
@endsection