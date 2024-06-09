@extends('layout.master')

@section('title')
    edit order
@endsection

@section('content')
<form action="/order/{{$order->id}}" method="post">
    {{-- validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{-- form input --}} 
    @csrf
    @method('put')
    <div class="form-group">
      <label>id_pelanggan</label>
      <input type="text" class="form-control" id_pelanggan="id_pelanggan" value="{{ $order-> }}">
    </div>
    <div class="form-group">
        <label>alamat_pelanggan</label>
        <textarea name="id_kategori" id="" cols="30" rows="10" class="form-control">{{ $kategori->nama_kategori }}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection