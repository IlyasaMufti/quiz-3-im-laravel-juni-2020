@extends ('layouts.master')

@section('content')
<table>
		<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi Artikel</th>
        <th>Tag</th>
      </tr>
    </thead>
    <tbody>
      <form method="GET" action="/artikel/create">
      @csrf
    <button type="submit" class="btn btn-sm btn-warning">Buat Artikel</button>
  </form>
    	@foreach($artikel as $key => $item)
      <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->Judul}}</td>
        <td>{{$item->Isi}}</td>
        <td>{{$item->tag}}</td>
        <td><a href="{{ url ('/artikel/'.$item->id)}}">Lihat</a></td>
      </tr>
      	@endforeach      
  </table>
	</table>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
