@extends ('layouts.master')

@section('content')
@foreach($artikel as $key => $item)
<form action= "{{url('/artikel/'.$item->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" placeholder="Tulis Judul" id="judul" name="Judul" value="{{$item -> Judul}}">
  </div>
  <div class="form-group">
    <label for="isi">Isi Artikel:</label>
    <input type="text" class="form-control" id="isi" name="Isi" value="{{$item -> Isi}}">
   </div>
   <div class="form-group">
    <label for="tag">Tag:</label>
    <input type="text" class="form-control" id="tag" name="tag" value="{{$item -> tag}}">
   </div>
  <button type="Submit" class="btn btn-primary">Update</button>
	</form>
@endforeach
@endsection