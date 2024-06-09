@extends('layout.master')

@section('title')
    add order
@endsection

@section('content')
<form action="/order" method="post">
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
    <div class="form-group">
      <label></label>
      <input type="text" class="form-control" id_pelanggan="id_pelanggan">
    </div>
    <div class="form-group">
        <label>alamat_pelanggan</label>
        <textarea name="tanggal_pesanan" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection