@extends('layout.master')

@section('title')
   Detail kategori
@endsection

@section('content')
    <h1>{{$kategori->id_kategori}}<h1>
    <p>{{ $kategori ->nama_kategori }}</p>

    <a href="/kategori" class="btn btn -sm btn-secondary">kembali</a>
@endsection