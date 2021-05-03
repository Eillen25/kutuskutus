<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResellerController extends Controller
{
    public function addreseller(){


        return view('Reseller.tambah');
    }

    public function reselleredit(){


        return view('Reseller.edit');
    }
}
