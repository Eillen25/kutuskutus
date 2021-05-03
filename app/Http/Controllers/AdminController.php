<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminedit(){


        return view('Admin.edit');
    }

    public function addadmin(){


        return view('Admin.tambah');
    }
}
