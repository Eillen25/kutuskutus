<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produkedit($id){


        return view('Produk.edit');
    }
}
