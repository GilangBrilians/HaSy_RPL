@extends('Layout.after_login')

@section('title','Detail')

@section('container')

<div class="container mb-5" style="margin-top:100px">
    <div class="row">
        <div class="col-sm-6">
            <img class="img-fluid" src="{{ asset('img/bitmap.png') }}" alt="Card image cap" width="500px">
        </div>
        <div class="col-sm-6">
            <h1 class="mt-5">{{ $barang->nama }}</h1>
            <p class="mb-5">{{ $barang->kategori }}</p>
            <p>{{ $barang->deskripsi }}</p>
            <p class="font-weight-bold" style="color:#193948;font-size:24px">@currency($barang->harga)</p>
            <div class="row mt-5">
                <div class="col-sm">
                    <a class="btn rounded" style="background-color:#193948 ;width:100%; color:white"  href="{{ route('cart', $barang->id ) }}">Buy Now</a>
                </div>
            </div>

        </div>
    </div>
</div>
