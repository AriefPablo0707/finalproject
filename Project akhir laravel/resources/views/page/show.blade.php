@extends('layout.master')

@section('title')
   Detail order
@endsection

@section('content')
    <h1>{{$order->id_pelanggan}}<h1>
    <p>{{ $pelanggan ->tanggal_pesanan}}</p>

    <a href="/order" class="btn btn -sm btn-secondary">kembali</a>
@endsection