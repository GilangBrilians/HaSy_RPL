<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        return redirect('account');
    }

    public function store(Request $request)
    {
      $request->validate([
          'old_password' => ['required', new MatchOldPassword],
          'new_password' => 'required',
          'confirm_password' => 'same:new_password',
      ]);

      User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

      dd('Password change successfully.');
      //return redirect('/account')->with('success', 'Password berhasil diubah');
    }
}
