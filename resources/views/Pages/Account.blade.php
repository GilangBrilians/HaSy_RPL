@extends('Layout.after_login')

@section('title','Account')

@section('container')


<div class="container mb-5" style="margin-top:100px">
    <div class="row mt-5">
        <div class="col-sm-3 mr-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/user.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Flora Fauna</h5>
                    <p class="card-text">Jakarta, Indonesia</p>
                    <p class="card-text">Flora@gmail.com</p>
                    <center>
                        <a href="#" class="btn px-5" style="background-color:#193948; color:white">Logout</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-sm ml-5 px-3 py-3" style="border:1px solid black">
            <h1>Edit Profile</h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card mt-4" style="width: 15rem;">
                        <img class="card-img-top" src="img/profchange.png" alt="Card image cap">
                        <div class="card-body">
                            <center>
                                <a href="#" class="btn px-5 mt-2" style="background-color:#193948; color:white">Logout</a>
                            </center>
                            <p class="card-text mt-2">Pastikan foto yang anda pilih memiliki ukuran tidak melebihi 1 MB. Ekstensi yang diperbolehkan : jpeg.
                            jpg. png.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm ml-5 mt-3">
                    <h5>Biodata Diri</h5>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <p style="font-size:20px">Nama</p>
                        </div>
                        <div class="col-sm">
                            <p style="font-size:20px">Flora Fauna</p>
                        </div>
                    </div>
                    <div class="row mt-1 mb-5">
                        <div class="col-sm-4">
                            <p style="font-size:20px">Alamat</p>
                        </div>
                        <div class="col-sm">
                            <p style="font-size:20px">Jakarta, Indonesia</p>
                        </div>
                    </div>
                    <h5>Kontak</h5>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <p style="font-size:20px">Email</p>
                        </div>
                        <div class="col-sm">
                            <p style="font-size:20px">florafau@gmail.com</p>
                        </div>
                    </div>
                    <form class="mt-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="font-size:20px;font-weight:bold">Username</label>
                            <input type="text" class="form-control" placeholder="Enter your Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-size:20px;font-weight:bold">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-size:20px;font-weight:bold"> Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        
                        <button type="submit" style="color:white; background-color:#193948; padding: 1% 44% 1% 44%"  class="btn mt-3">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 mr-5"></div>
        <div class="col-sm ml-5 mt-5 px-3 py-3" style="border:1px solid black">
            <h1 class="my-5">Transaction</h1>
            <div class="trans mb-5 rounded px-3 py-3" style="background-color:#EAF2FF">
                <p>Belanja IDO12761</p>
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img-fluid" src="img/bitmap.png" alt="Card image cap">
                    </div>
                    <div class="col-sm-6 mt-3" style="border-right: 1px solid black">
                        <p class="font-weight-bold" style="font-size:24px;line-height: 0.5;">Coffe Mug</p>
                        <p style="color:#99999">Hustle Edition</p>
                        <p class="font-weight-bold" style="color:#193948;font-size:20px">$ 7.99</p>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <p style="font-size:20px">11 juni 2021</p>
                        <center class="mt-3">
                            <p class="rounded" style="padding: 15px 20px 15px 20px;background-color:#193948; color:white">Berhasil</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="trans mb-5 rounded px-3 py-3" style="background-color:#EAF2FF">
                <p>Belanja IDO12761</p>
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img-fluid" src="img/bitmap.png" alt="Card image cap">
                    </div>
                    <div class="col-sm-6 mt-3" style="border-right: 1px solid black">
                        <p class="font-weight-bold" style="font-size:24px;line-height: 0.5;">Coffe Mug</p>
                        <p style="color:#99999">Hustle Edition</p>
                        <p class="font-weight-bold" style="color:#193948;font-size:20px">$ 7.99</p>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <p style="font-size:20px">11 juni 2021</p>
                        <center class="mt-3">
                            <p class="rounded" style="padding: 15px 20px 15px 20px;background-color:#193948; color:white">Berhasil</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="trans mb-5 rounded px-3 py-3" style="background-color:#EAF2FF">
                <p>Belanja IDO12761</p>
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img-fluid" src="img/bitmap.png" alt="Card image cap">
                    </div>
                    <div class="col-sm-6 mt-3" style="border-right: 1px solid black">
                        <p class="font-weight-bold" style="font-size:24px;line-height: 0.5;">Coffe Mug</p>
                        <p style="color:#99999">Hustle Edition</p>
                        <p class="font-weight-bold" style="color:#193948;font-size:20px">$ 7.99</p>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <p style="font-size:20px">11 juni 2021</p>
                        <center class="mt-3">
                            <p class="rounded" style="padding: 15px 20px 15px 20px;background-color:#193948; color:white">Berhasil</p>
                        </center>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>