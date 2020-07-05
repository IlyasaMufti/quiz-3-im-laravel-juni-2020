@extends ('layouts.master')

@section('content')
<div class="card" style="width: 18rem;">
  <div class="card-body">
  	@foreach($artikel as $key=>$item)
    <h3 class="card-title">Judul : {{$item->Judul}}</h3>
    <p class="card-text">Isi Artikel : {{$item->Isi}} <br><br></p>
    <p class="card-text">Tag : {{$item->tag}}</p>
   </div>
  	@endforeach
   <div class="card-body">
  	@foreach($artikel as $key=>$item)
    <form method="POST" action="/artikel/{{$item->id}}/edit" style="display: inline">
    	@csrf
    	@method('GET')
    <button type="submit" class="btn btn-sm btn-success">Ubah</button>
	</form>
    
    <form method="POST" action="/artikel/{{$item->id}}" style="display: inline">
    	@csrf
    	@method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
	</form>
    @endforeach
    <form method="GET" action="/artikel" style="display: inline">
    	@csrf
    <button type="submit" class="btn btn-sm btn-warning">Kembali</button>
	</form>
  </div>
</div>
@endsection

