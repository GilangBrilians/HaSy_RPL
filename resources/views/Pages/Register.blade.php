@extends('Layout.sign')

@section('title','Register')

@section('container')

<link rel="stylesheet" href="{{ asset('login.css') }}">


<div class="row">
    <div class="col-sm-6 logform">
        <div class="row" style="margin: 20% 0px 0px 20%">
            <div class="col-sm-6">
            <a style="font-size: 30px; color:Black;" href="#">HaSy</a>
            </div>
            <div class="col-sm-6">
                <a class="btn font-weight-medium ml-5 px-5 btnsign mt-1" style="color:Black; border :1px solid black;" href="{{ route('login') }}">Sign In</a>
            </div>
        </div>
        <div class="formin"  style="margin: 20% 0px 0px 20%" >
            <h1 class="mb-5">Create Account</h1>
            <form method="POST" action="{{ route('register.custom') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn font-weight-bold mt-5 btnsum"  style="color:white; background-color:#193948; padding: 3% 45% 3% 45%" >Register</button>
            </form>
        </div>
    </div>
    <div class="col-sm-6 picback">
    </div>
</div>
