@extends('layout.master')

@section('title')
    add pelanggan
@endsection

@section('content')
<form action="/pelanggan" method="post">
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
      <label>nama_pelanggan</label>
      <input type="text" class="form-control" nama_pelanggan="nama_pelanggan">
    </div>
    <div class="form-group">
        <label>alamat_pelanggan</label>
        <textarea name="alamat_pelanggan" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection