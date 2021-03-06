@extends('Layout.sign')

@section('title','Login')

@section('container')

<link rel="stylesheet" href="{{ asset('login.css') }}">


<div class="row">
    <div class="col-sm-6 logform">
        <div class="row" style="margin: 15% 0px 0px 20%">
            <div class="col-sm-6">
                <a style="font-size: 30px; color:Black;" href="#">HaSy</a>
            </div>
            <div class="col-sm-6">
                <a class="btn font-weight-medium ml-5 px-5 btnsign mt-1" style="color:Black; border :1px solid black;" href="{{ route('register-user') }}">Sign Up</a>
            </div>
        </div>
        <div class="formin"  style="margin: 20% 0px 0px 20%" >
            <h1 class="mb-5">Login to Your Account</h1>
            @if(session()->get('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}
              </div><br />
            @endif
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn font-weight-bold mt-5"  style="color:white; background-color:#193948; padding: 3% 46% 3% 46%" >Login</button>
            </form>
        </div>
    </div>
    <div class="col-sm-6 picback">
    </div>
</div>
