@extendeds('layout.master')

@sections('title')
    kategori
@endsection

@section('content')
<a href="/kategori/create" class="btn-sm btn-primary">Add order</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id_pelanggan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($order as $key=>$item)
        <tr>
            <th scope="row">{{$key + 1}}</1th>
            <td>{{$item->order}}</td>
            <td>
                
                <form action="/kategori/{{$item->id}}" method="post">
                    @csrf
                    <a href="/kategori/{{ $sistem->id }}"class="btn btn-sm btn-info">Detail</a>
                    <a href="/kategori $sistem->id }}/edit" class="btn btn-sm btn-primary">Update</a>
                    @method('delete')
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
        </tr> 
        @empty
        <tr>
            <th>Tidak ada kategori</th>
            <tr>
        @endforelse
      
    </tbody>
  </table>