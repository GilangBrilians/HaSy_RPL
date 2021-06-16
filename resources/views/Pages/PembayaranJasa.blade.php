@extends('Layout.after_login')

@section('title','Detail')

@section('container')

<link rel="stylesheet" href="{{ asset('payment.css') }}">



<div class="container mb-5" style="margin-top:100px">
    <div class="row">
        <div class="col-sm-8 px-3 py-1 rounded" style="border:2px solid black">
            <h1 class="mt-2 mb-5">Checkout</h1>
            <div class="shipping">
                <h6>Shipping Address</h6>
                <p>Flora Fauna (rumah)</p>
                <p>02822306882211</p>
                <p>Jln. Merdeka No. 115 Cibaduyut, Bandung Barat, Jawa Barat 2221</p>
            </div>
            <div class="trans mb-5 rounded px-3 py-3" style="background-color:#EAF2FF">
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img-fluid" src="img/pengrajin.jpg" alt="Card image cap">
                    </div>
                    <div class="col-sm mt-3">
                        <p class="font-weight-bold" style="font-size:24px;line-height: 0.5;">Mamang udin</p>
                        <p style="color:#99999">Pengrajin Sepatu</p>
                        <div class="row">
                            <div class="col-3 mt-2">
                                <div class="cardbody mx-4 mt-3">
                                    <p class="font-weight-bold" style="color:#193948;font-size:20px">$ 7.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm px-3 py-1 rounded ml-2" style="border:2px solid black">
            <h1 class="mt-2 mb-5">Payment Detail</h1>
            <div class="subT">
                <div class="row">
                    <div class="col-sm-8 ml-3">
                        <p>Total</p>
                    </div>
                    <div class="col-sm">
                        <p>$7.99</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 ml-3">
                        <p>Shipping</p>
                    </div>
                    <div class="col-sm">
                        <p>$2.00</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 mb-4" style="border-bottom:1px solid black"></div>
                <div class="col"></div>
                <div class="row">
            </div>
                <div class="col-sm-8 ml-3">
                    <p>Total Pay</p>
                </div>
                <div class="col-sm">
                    <p>$9.99</p>
                </div>
            </div>
            <button class="btn rounded mt-5" style="background-color:#193948 ;width:100%; color:white">Pay Service</button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 mt-3 px-3 py-3 rounded" style="border:2px solid black">
            <h1 class="mb-5">Payment Method</h1>
            <div class="form-check mb-4">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    <img class="img-fluid" src="img/visa.png"alt="">
                </label>
            </div>
            <div class="form-check mb-4">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    <img class="img-fluid" src="img/mastercard.png"alt="">
                </label>
            </div>
            <div class="form-check mb-4">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                <img class="img-fluid" src="img/paypal.png"alt="">
                </label>
            </div>
            <div class="form-check mb-4">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    COD
                </label>
            </div>
        </div>
    </div>
</div>