<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BrowseBarangController extends Controller
{
    public function browseall()
    {
      $barang = Barang::all();

      return view('Pages.Browse_barang', compact('barang'));
    }
}
