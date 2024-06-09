@extends('layout.master')

@section('title')
   Detail Pelanggan
@endsection

@section('content')
    <h1>{{$pelanggan->nama_pelanggan}}<h1>
    <p>{{ $pelanggan ->alamat_pelanggan }}</p>

    <a href="/pelanggan" class="btn btn -sm btn-secondary">kembali</a>
@endsection