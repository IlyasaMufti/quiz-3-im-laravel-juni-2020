@extends ('layouts.master')

@section('content')
<form action= "{{url('/artikel')}}" method="POST">
		@csrf
		<div class="form-group">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" placeholder="Tulis Judul" id="judul" name="Judul">
  </div>
  	<div class="form-group">
    <label for="isi">Isi Artikel:</label>
    <input type="text" class="form-control" placeholder="Tulis Isi Artikel" id="isi" name="Isi">
    </div>
    <div class="form-group">
    <label for="isi">Tag:</label>
    <input type="text" class="form-control" placeholder="Tulis Tag Artikel" id="tag" name="Tag">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection