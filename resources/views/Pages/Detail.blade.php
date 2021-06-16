@extends('Layout.after_login')

@section('title','Detail')

@section('container')

<div class="container mb-5" style="margin-top:100px">
    <div class="row">
        <div class="col-sm-6">
            <img class="img-fluid" src="{{ asset('img/bag.png') }}" alt="Card image cap">
        </div>
        <div class="col-sm-6">
            <h1 class="mt-5">{{ $barang->nama }}</h1>
            <p class="mb-5">{{ $barang->kategori }}</p>
            <p>{{ $barang->deskripsi }}</p>
            <p class="font-weight-bold" style="color:#193948;font-size:24px">@currency($barang->harga)</p>
            <div class="row mt-5">
                <div class="col-sm-6">
                    <button class="btn rounded" style="border:1px solid #193948 ;width:100%;color:#193948">Add to cart</button>
                </div>
                <div class="col-sm-6">
                    <button class="btn rounded" style="background-color:#193948 ;width:100%; color:white">Buy Now</button>
                </div>
            </div>

        </div>
    </div>
</div>
