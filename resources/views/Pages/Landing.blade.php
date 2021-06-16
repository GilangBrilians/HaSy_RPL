@extends('Layout.before_login')

@section('title','Landing')

@section('container')

<div class="container">
    <div class="jumbotron" style="margin-top:100px;background-color:#C3CFDD;">
        <div class="row">
            <div class="col-sm-7">
                <p class="font-weight-bold ml-5 mt-5" style="color:black;font-size:50px;">Get the unique <br>
                    <span style="color:#4FAEC0">or</span> make it  <br>
                    yourself!
                </p>
                <p class="ml-5">Buy goods or let us find a maker for you</p>
                <a class=" btn font-weight-bold ml-5 px-5 " style="color:white; background-color:#193948" href="#">Explore More</a>
            </div>
            <div class="col-sm-5">
                <img class="img-fluid" src="img/banner.png" width=500px alt="">
            </div>
        </div>
    </div>

    <h1 class="my-5">Popular item</h1>
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

    <div class="row">
        <div class="col-sm-7 my-5">
            <img class="img-fluid" src="img/penyedia.png" width=600px alt="">
        </div>
        <div class="col-sm my-5">
            <div style="margin-top:100px" class="desc">
                <h1>Introduce the creatives</h1>
                <p>Anda memiliki bahan yang kira - kira masih bisa diolah atau sekedar ingin bereksplorasi tapi bingung harus buat apa? Serahkan pada kami! Cukup hubungi para kreatif dan mereka akan membantu menyulap barang - barang bekasmu menjadi
                sesuatu yang bernilai dan unik.</p>
                <a class=" btn font-weight-bold px-3 rounded " style="color:white; background-color:#193948" href="#">Explore More</a>
            </div>
        </div>
    </div>

</div>
