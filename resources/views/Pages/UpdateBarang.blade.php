@extends('Layout.admin')

@section('title','update Barang')

@section('container')

<link rel="stylesheet" href="{{ asset('itemlist.css') }}">

<div class="sidebar">
    <h3 class="my-5 text-center">Admin</h3>
    <a class="active font-weight-bold" href="{{ route('barang.index') }}">Item List</a>
    <a  href="{{ route('barang.create') }}">Input Item</a>
</div>

<div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div><br />
    @endif
    <div class="col-sm-12">
        <h1 class="pt-5 ml-5">Update Data Barang</h1>
        <form class="mt-5 ml-5" method="POST" action="{{ route('barang.update', $barang->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleInputEmail1">Item Name</label>
                <input type="text" name="nama" class="form-control" value="{{ $barang->nama }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Item Category</label>
                <input type="text" name="kategori" class="form-control" value="{{ $barang->kategori }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Item Description</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $barang->deskripsi }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Item price</label>
                <input type="text" name="harga" class="form-control" value="{{ $barang->harga }}">
            </div>
            <div class="form-group my-5">
                <label class="form-label" for="customFile">Picture Image</label>
                <input type="file" id="customFile" />
            </div>

            <button type="submit" class="btn font-weight-bold mt-5"  style="color:white; background-color:#193948; padding: 1% 46% 1% 46%" >Submit</button>
        </form>
    </div>
</div>
