@extends('admin.app')
@section('title','kontak')
@section('content-title','kontak')
@section('content')
<div class="row">
    <div class="col-lg">
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                KONTAK SISWA
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" widht="100%" cellspacing="0%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $item)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->jk}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                {{-- <a href="{{ route ('siswa.edit',$item->id) }}" class="btn btn-warning btn-circle btn-sm"><i class="far fa-edit"></i></a>
                                <a href="{{ route ('siswa.show',$item->id) }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                <form action="{{ route ('siswa.destroy',$item->id) }}" method="post" class="d-inline"> --}}
                                    @csrf
                                    @method('delete')
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
    </div>

    {{-- <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body" id="project">
    
            </div>
        </div>
    </div> --}}
      </div>
    <script>
      function show(id,e) {
          e.preventDefault();
          $.get('/projects/' + id, function(data) {
              $('#project').html(data);
          })
      }
    </script>


@endsection