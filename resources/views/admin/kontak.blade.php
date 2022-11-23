@extends('admin.app')
@section('title','kontak')
@section('content-title','kontak')
@section('content')
{{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('kontak.create') }}" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kontak Siswa</th>
                            <th>Jenis Kontak</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>Kontak Siswa</th>
                            <th>Jenis Kontak</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($kontak as $index => $item)
                        <tr>
                            <td>{{ $item->siswa->nama }}</td>
                            <td>{{ $item->jeniskontak->tipe_kontak }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                {{-- <a href="{{ route('kontak.show', ['kontak' => $item->id]) }}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a> --}}  
                                <form class="d-inline" action="{{route('kontak.destroy',$item->id)}}" method="POST">
                                {{-- <a href="{{ route('kontak.edit', ['kontak' => $item->id]) }}" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a> --}}
                              
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>      
@endsection