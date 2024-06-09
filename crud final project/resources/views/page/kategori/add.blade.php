@extends('layout.master')

@section('title')
    add kategori
@endsection

@section('content')
<form action="/kategori" method="post">
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
      <input type="text" class="form-control" id_katgeori="nama_kategori">
    </div>
    <div class="form-group">
        <label>id_kategori</label>
        <textarea name="nama_kategori" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection