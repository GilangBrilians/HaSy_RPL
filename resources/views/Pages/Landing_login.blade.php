@extends('Layout.after_login')

@section('title','Landing')

@section('container')

<link rel="stylesheet" href="{{ asset('landing_login.css') }}">

<div class="container">
    <div class="jumbotron banner">
        <h1 class="mt-5 ml-4">35% sale off <br>
            for ceramic items
        </h1>
        <a class=" btn font-weight-bold ml-4 px-5 " style="color:white; background-color:#193948" href="#">Shop Now</a>
    </div>

    <h1 class="mt-5 mb-3">Popular item</h1>
    <div class="row mb-5">
        @foreach($barang as $bar)
        <div class="card mr-4" style="width: 16rem;">
            <img class="cardimg-top my-3 mx-3 rounded" src="img/bitmap.png" alt="Cardimage cap">
            <div class="cardbody mx-4">
                <p class="font-weight-bold" style="font-size:24px;line-height: 0.5;">{{ $bar->nama }}</p>
                <p style="color:#99999">{{ $bar->deskripsi }}</p>
                <!-- <p class="font-weight-bold" style="color:#193948;font-size:20px">$ 7.99</p> -->
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="cardbody mx-4 mt-3">
                        <p class="font-weight-bold" style="color:#193948;font-size:20px">@currency($bar->harga)</p>
                    </div>
                </div>
                <div class="col">
                    <a href="{{ route('barang.show', $bar->id) }}" class="btn px-3 py-3 mb-3" style="background-color:#193948"><img class="img-fluid" src="img/bag.svg" width=20px alt=""></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h1 class="mt-5 mb-3 ">Latest item</h1>
    <div class="row mb-5">
      @foreach($barang as $bar)
      <div class="card mr-4" style="width: 16rem;">
          <img class="cardimg-top my-3 mx-3 rounded" src="img/bitmap.png" alt="Cardimage cap">
          <div class="cardbody mx-4">
              <p class="font-weight-bold" style="font-size:24px;line-height: 0.5;">{{ $bar->nama }}</p>
              <p style="color:#99999">{{ $bar->deskripsi }}</p>
              <!-- <p class="font-weight-bold" style="color:#193948;font-size:20px">$ 7.99</p> -->
          </div>
          <div class="row">
              <div class="col-7">
                  <div class="cardbody mx-4 mt-3">
                      <p class="font-weight-bold" style="color:#193948;font-size:20px">@currency($bar->harga)</p>
                  </div>
              </div>
              <div class="col">
                  <a href="{{ route('barang.show', $bar->id) }}" class="btn px-3 py-3 mb-3" style="background-color:#193948"><img class="img-fluid" src="img/bag.svg" width=20px alt=""></a>
              </div>
          </div>
      </div>
      @endforeach
    </div>
</div>

    <div class="jumbotron jumbotron-fluid mb-0 sect ">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-fluid" src="img/banner2.png" width=600px alt="">
                </div>
                <div style="margin-top:100px"class="col-sm-6">
                    <h1>100% handmade products</h1>
                    <p>Produk yang kami sediakan merupakan 100% buatan tangan. Tujuannya kami yaitu turut membantu mengatasi masalah masalah lingkungan yang terjadi akibat sampah. Dan anda sudah tergabung dengan membeli produk kami..</p>
                </div>
            </div>
        </div>

    </div>
