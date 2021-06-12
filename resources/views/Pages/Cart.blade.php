@extends('Layout.after_login')

@section('title','Detail')

@section('container')

<link rel="stylesheet" href="{{ asset('payment.css') }}">


<div class="container mb-5" style="margin-top:100px">
    <div class="row">
        <div class="col-sm-8 px-3 py-1 rounded" style="border:2px solid black">
            <h1 class="mt-2 mb-5">Cart</h1>
            <div class="trans mb-5 rounded px-3 py-3" style="background-color:#EAF2FF">
                <p>Belanja IDO12761</p>
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img-fluid" src="img/bitmap.png" alt="Card image cap">
                    </div>
                    <div class="col-sm mt-3">
                        <p class="font-weight-bold" style="font-size:24px;line-height: 0.5;">Coffe Mug</p>
                        <p style="color:#99999">Hustle Edition</p>
                        <div class="row">
                            <div class="col-3 mt-2">
                                <div class="cardbody mx-4 mt-3">
                                    <p class="font-weight-bold" style="color:#193948;font-size:20px">$ 7.99</p>
                                </div>
                            </div>
                            <div class="col">   
                                <div class="number-input md-number-input ml-5">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trans mb-5 rounded px-3 py-3" style="background-color:#EAF2FF">
                <p>Belanja IDO12761</p>
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img-fluid" src="img/bitmap.png" alt="Card image cap">
                    </div>
                    <div class="col-sm mt-3">
                        <p class="font-weight-bold" style="font-size:24px;line-height: 0.5;">Coffe Mug</p>
                        <p style="color:#99999">Hustle Edition</p>
                        <div class="row">
                            <div class="col-3 mt-2">
                                <div class="cardbody mx-4 mt-3">
                                    <p class="font-weight-bold" style="color:#193948;font-size:20px">$ 7.99</p>
                                </div>
                            </div>
                            <div class="col">   
                                <div class="number-input md-number-input ml-5">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trans mb-5 rounded px-3 py-3" style="background-color:#EAF2FF">
                <p>Belanja IDO12761</p>
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img-fluid" src="img/bitmap.png" alt="Card image cap">
                    </div>
                    <div class="col-sm mt-3">
                        <p class="font-weight-bold" style="font-size:24px;line-height: 0.5;">Coffe Mug</p>
                        <p style="color:#99999">Hustle Edition</p>
                        <div class="row">
                            <div class="col-3 mt-2">
                                <div class="cardbody mx-4 mt-3">
                                    <p class="font-weight-bold" style="color:#193948;font-size:20px">$ 7.99</p>
                                </div>
                            </div>
                            <div class="col">   
                                <div class="number-input md-number-input ml-5">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
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
            <button class="btn rounded mt-5" style="background-color:#193948 ;width:100%; color:white">Buy Now</button>
        </div>
    </div>
</div>