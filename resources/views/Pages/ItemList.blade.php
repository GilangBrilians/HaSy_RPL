@extends('Layout.admin')

@section('title','Item List')

@section('container')

<link rel="stylesheet" href="{{ asset('itemlist.css') }}">



<div class="sidebar">
    <h3 class="my-5 text-center">Admin</h3>
    <a class="active font-weight-bold" href="#">Item List</a>
    <a href="#">Input & Update Item</a>

</div>

    <div class="container">
      <div class="content">
        <h3 class="mt-3 font-weight-bold">Item List</h3>
        <table class="table mt-3">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Item Name</th>
              <th scope="col">Item Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <!-- query untuk menampilkan data produk ke interface dari database -->
          <!-- menggunakan looping while sampai semua data ditampilkan-->
          <tbody>
            <tr>
              <td>Nama</td> <!-- menampilkan nama barang -->
                <td>Harga</td> <!-- menampilkan harga barang -->
                <td>
                  <button class="btn btn-primary"> <!-- button untuk update data barang -->
                    Update
                  </button>
                  <button class="btn btn-danger"> <!-- button untuk delete data barang -->
                    Delete
                  </button>
              </td>
            </tr>
           
            
          </tbody>
        </table>
      </div>
    </div>
