@extends('admin.app')
@section('title','Show Kontak')
@section('content-title','Show Kontak')
@section('content')

@if($data->isEmpty())
<h6 class="text-center">Siswa Belum Memiliki Kontak</h6>
@else
@foreach ()
<div class="card">
    <div class="card-header">
        
    </div>
    <div class="card-body">
       
    </div>
    <div class="card-footer">
          
        <form action="" method="POST">
            @csrf
            @method('delete')
            <a href=""  class="btn btn-warning btn-circle btn-sm"> <i class="fas fa-edit"></i></a>  
            <button type="submit" class="btn btn-danger btn-circle btn-sm"> <i class="fas fa-trash"></i></button>
        </form>
    </div>
</div>
@endforeach
@endif

@endsection