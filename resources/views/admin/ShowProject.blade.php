{{-- @dd($data) --}}
@if ($data->isEmpty())
<h6 class="text-center">belum buat project</h6>
    
@else
    @foreach ($data as $item)
        <div class="card">
            <div class="card-header">
                <h6 style=" text-transform: uppercase;"> {{ $item->nama_project }}</h6>
            </div>
            
            <div class="card-body">
                {{-- <h1 style=" text-transform: uppercase;"> {{ $item->nama_project }}</h1> --}}
               
                <h6>TANGGAL : {{$item->tanggal}}</h6>
                <h6>DESKRIPSI :</h6>
                {{ $item->deskripsi }}
                <div class="card-body">
                <img src="{{asset('./template/img/' .$item->foto)}}" width="150" class="img-thumbnail">
            </div>
            </div>
            <div class="card-footer"> 
                <div class="row">
                <a href="{{ route ('projects.edit',$item->id) }}" class="btn btn-warning btn-circle btn-sm"><i class="far fa-edit"></i></a>
                <form action="{{ route('projects.destroy',$item->id)}}" method="POST">@csrf 
                    <button type="submit" id="delete-form" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                @method('delete')</form>
            </div>
            </div>
        </div>
    @endforeach
@endif