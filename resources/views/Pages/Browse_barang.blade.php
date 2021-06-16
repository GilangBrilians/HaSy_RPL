@extends('Layout.after_login')

@section('title','Brang')

@section('container')


<div class="container mb-5" style="margin-top:100px">
    <div class="row mt-5">
      <div class="col-sm">
        <div class="row">
          @foreach($barang as $bar)
          @if ($loop->count % 3 === 0)
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-sm">
                <div class="row">
          @else
            <div class="col-sm-4">
              <div class="card" style="width: 20rem;">
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
          </div>
        @endif
        @endforeach
      </div>
    </div>
  </div>
</div>
