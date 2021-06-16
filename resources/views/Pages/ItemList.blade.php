@extends('Layout.admin')

@section('title','Item List')

@section('container')

<link rel="stylesheet" href="{{ asset('itemlist.css') }}">



<div class="sidebar">
    <h3 class="my-5 text-center">Admin</h3>
    <a class="active font-weight-bold" href="{{ route('barang.index') }}">Item List</a>
    <a href="{{ route('barang.create') }}">Input Item</a>

</div>

    <div class="container">
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div><br />
      @endif
      <div class="content">
        <h3 class="mt-3 font-weight-bold">Item List</h3>
        <table class="table mt-3">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Item Name</th>
              <th scope="col">Item Category</th>
              <th scope="col">Item Description</th>
              <th scope="col">Item Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <!-- query untuk menampilkan data produk ke interface dari database -->
          <!-- menggunakan looping while sampai semua data ditampilkan-->
          <tbody>
            @foreach($barang as $bar)
            <tr>
              <td>{{$bar->nama}}</td> <!-- menampilkan nama barang -->
              <td>{{$bar->kategori}}</td> <!-- menampilkan kategori barang -->
              <td>{{$bar->deskripsi}}</td> <!-- menampilkan deskripsi barang -->
              <td>{{$bar->harga}}</td> <!-- menampilkan harga barang -->
              <td>
                <a href="{{ route('barang.edit', $bar->id) }}" class="btn btn-primary"> <!-- button untuk update data barang -->
                  Update
                </a>
                <form action="{{ route('barang.destroy', $bar->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger"> <!-- button untuk delete data barang -->
                    Delete
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
