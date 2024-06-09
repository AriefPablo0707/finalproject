@extendeds('layout.master')

@sections('title')
    pelanggan
@endsection

@section('content')
<a href="/pelanggan/create" class="btn-sm btn-primary">Add Pelanggan</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Alamat_pelanggan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($pelanggan as $key=>$item)
        <tr>
            <th scope="row">{{$key + 1}}</1th>
            <td>{{$item->pelanggan}}</td>
            <td>
                
                <form action="/pelanggan{{$item->id}}" method="post">
                    @csrf
                    <a href="/pelanggan/{{ $sistem->id }}"class="btn btn-sm btn-info">Detail</a>
                    <a href="/pelanggan/{{ $sistem->id }}/edit" class="btn btn-sm btn-primary">Update</a>
                    @method('delete')
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
        </tr> 
        @empty
        <tr>
            <th>Tidak ada pelanggan</th>
            <tr>
        @endforelse
      
    </tbody>
  </table>