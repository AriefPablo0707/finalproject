@extendeds('layout.master')

@sections('title')
    order
@endsection

@section('content')
<a href="/order/create" class="btn-sm btn-primary">Add order</a>
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
                
                <form action="/order/{{$item->id}}" method="post">
                    @csrf
                    <a href="/order/{{ $sistem->id }}"class="btn btn-sm btn-info">Detail</a>
                    <a href="/order/{{ $sistem->id }}/edit" class="btn btn-sm btn-primary">Update</a>
                    @method('delete')
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
        </tr> 
        @empty
        <tr>
            <th>Tidak ada order</th>
            <tr>
        @endforelse
      
    </tbody>
  </table>