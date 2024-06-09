@extends('layout.master')

@section('title')
    edit kategori
@endsection

@section('content')
<form action="/katgori/{{$kategori->id}}" method="post">
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
      <label>id_kategori</label>
      <input type="text" class="form-control" id_kategori="id_kategori" value="{{ $kategori->nama_kategori }}">
    </div>
    <div class="form-group">
        <label>id_kategori</label>
        <textarea name="id_kategori" id="" cols="30" rows="10" class="form-control">{{ $kategori->nama_kategori }}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection