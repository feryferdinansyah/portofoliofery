@extends('admin.app')
@section('title','Siswa')
@section('content-title','Siswa')
@section('content')
    <!-- <a class="btn btn-success" href="{{ route('siswa.create')}}">Tambah Data</a> -->
    <div class="row">
        <div class="col-lg-12">
        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <!-- <h6 class="m-0 font-weight-bold text-primary">DATA SISWA</h6> -->
                                    <a class="btn btn-success" href="{{ route('siswa.create')}}">Tambah Data</a>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($data as $item)
                                            <tr>
                                                <th>{{$loop->iteration}}</th>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->jk}}</td>
                                                <td>{{$item->alamat}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>
                                                <a href="{{ route ('siswa.edit',$item->id) }}" class="btn btn-warning btn-circle btn-sm"><i class="far fa-edit"></i></a>
                                                <a href="{{ route ('siswa.show',$item->id) }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                                <form action="{{ route ('siswa.destroy',$item->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                                                </form>
                                                

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!-- <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Ircham</td>
                                                <td>Laki laki</td>
                                                <td>Malang</td>
                                                <td>ircham@gmail.com</td>
                                                <td>
                                                <a href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
                                                <a href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>

                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Arva</td>
                                                <td>Laki laki</td>
                                                <td>Sidoarjo</td>
                                                <td>arva@gmail.com</td>
                                                <td>
                                                <a href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
                                                <a href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>

                                                </td>
                                            </tr> -->
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
        </div>
    </div>


@endsection