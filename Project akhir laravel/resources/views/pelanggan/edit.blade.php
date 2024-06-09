@extends('layout.master')

@section('title')
    edit pelanggan
@endsection

@section('content')
<form action="/pelanggan/{{$pelanggan->id}}" method="post">
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
      <label>nama_pelanggan</label>
      <input type="text" class="form-control" nama_pelanggan="nama_pelanggan" value="{{ $pelanggan->alamat_pengirim }}">
    </div>
    <div class="form-group">
        <label>alamat_pelanggan</label>
        <textarea name="alamat_pelanggan" id="" cols="30" rows="10" class="form-control">{{ $pelanggan->alamat_pengirim }}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection