<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
      return view('Pages.Login');
    }

    public function customLogin(Request $request)
    {
      $request->validate([
        'email' => 'required',
        'password' => 'required',
      ]);

      $credentials = $request->only('email', 'password');
      if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard')->withSuccess('Signed in');
      }

      return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('Pages.Register');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|max:191',
            'address' => 'required|max:191',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'email' => $data['email'],
        'name' => $data['name'],
        'address' => $data['address'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function landing()
    {
      $barang = Barang::all()->random(4);

      return view('Pages.Landing', compact('barang'));
    }

    public function cart(Request $request)
    {
      $data = $request->all();
      $barang = Barang::findOrFail(key((array)$data));

      return view('Pages.Cart', compact('barang'));
    }

    public function payment(Request $request)
    {
      $data = $request->all();
      $barang = Barang::findOrFail(key((array)$data));

      return view('Pages.Payment', compact('barang'));
    }

    public function dashboard()
    {
        if(Auth::check()){
          $barang = Barang::all()->random(4);

          return view('Pages.Landing_login', compact('barang'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
